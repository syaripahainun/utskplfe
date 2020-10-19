<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io"></a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>

<script>
    $(document).ready(function() {  
    $.urlParam = function(name){
	    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	    return results[1] || 0;
    }
    var uuid = $.urlParam('uuid'); 

    $.get("http://localhost:8000/company/" + uuid, function(data, status){
        $.each(data.data.user, function(index, value) {
          var body = '<tr>' 
            body += '<td>'+value.company_name+'</td>'
            body += '<td>'+value.email_owner+'</td>'
            body += '<td>'
                body +='<button class="btn btn-info fas fa-eye" onclick="redirect(this)" dataid='+value.uuid+' style="margin: 5px;"> Show </button>'

                body +='<button type="submit" id="submit" class="btn btn-danger fas fa-trash-alt" onclick="redirect2(this)" dataid='+value.id+' style="margin: 5px;"> Delete </button>'
            body += '</td>'
            body +='</tr>';
             $("#tablecompany tbody").append(body);
        });
        $("#tablecompany").DataTable();
    });

    $.get("http://localhost:8000/company/list/" + uuid ,  function(data, status){
        $.each(data.data.user, function(index, value) {
            var body = '<tr>'
              body += '<td>'+value.name+'</td>'
              body += '<td>'+value.address+'</td>'
              body += '<td>'+value.phone+'</td>'
              body += '<td>'
                  body += '<button class="btn btn-success" onclick="redirect3(this)" dataid='+value.uuid+' > add </button>'
              body +='</td>'
              body += '</tr>';
              $("#company tbody").append(body);
        });
        $("#company").DataTable();
        // $("#company").DataTable({
        //   "processing": true,
        //   "serverSide": true,
        //   "ajax": "http://localhost:8000/comp/list/",
        //   "deferLoading": 10000
        // });
      });

    $("#tmblLogout").click(function(){
    if(confirm("Are you sure?")){
      $.get("http://localhost:8000/logout", function(data, status){
        setCookie("api_token", "", -1);
        setCookie("name", "", -1);
        window.location.href="../indexadmin.php";
        alert("Anda Berhasil Keluar");
      });
    }
    });
    });


    function redirect(event){
    console.log('a')
        let that = $(event)
        let uuid = that.attr('dataid')
        window.location.href= `showcompany2.php?uuid=${uuid}`;
    }

    function create(event){
    console.log('a')
      let that = $(event)
      let ids = that.attr('dataid')
      window.location.href=`createcompany2.php?id=${ids}`;
    }

    function redirect3(event){
      console.log('a')
      
      let that = $(event)  
      let id = that.attr('dataid')
      var uuid = $.urlParam('uuid')
      

      var txt;
      if (confirm("Add company to list?")) {
        
        $.ajax({
          type: "POST",
          url: "http://localhost:8000/usercompany/store/" + uuid,
          data: {
              company_uuid : id
          },
          success: function(data) {
            alert("Data: " + data);
            location.reload();
            return false;
          }
        });
      }
    }

    function redirect2(event){
        console.log('a')
        let that = $(event)
        let id = that.attr('dataid')
        //window.location.href=`http://localhost:8000/users/delete/${uuid}`;

        var txt;
        if (confirm("Are you sure?")) {
            $.ajax({
                type: "POST",
                url: "http://localhost:8000/company/delete/" + id,
                data: {
                        name : $("#name").val(),
                        email : $("#email").val(),
                        password : $("#password").val(),
                        type : $("#type").val()
                    },
                success: function(data) {
                    alert("Data: " + data);
                    location.reload();
                    return false;
                }    
            });
        }   
    }
</script>
</body>
</html>