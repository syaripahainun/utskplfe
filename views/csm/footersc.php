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
    var user_id = $.urlParam('user_id');
    var nama = getCookie("name");
        $("#nameuser").text(nama);
    $.get("http://localhost:8000/update/" + user_id, function(data, status){
        $.each( data.data.user, function(index, value) {
          var row = '<tr>' 
            + '<td>'+value.company_name+'</td>'
            + '<td>'+value.email_owner+'</td>'
            + '<td>'
                +'<button class="btn btn-info read-one-user-button buttonshow" onclick="redirect1(this)" dataid='+value.id+'> Show </button>'

                +'<button class="btn btn-primary update-user-button buttonedit" onclick="redirect2(this)" dataid='+value.id+'> Edit </button>'


                +'<button type="submit" id="submit" class="btn btn-danger delete-user-button" onclick="redirect3(this)" dataid='+value.id+'>Delete</button>'
            + '</td>'
         + '</tr>';
        $("#tablecompany").append(row);
        });
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
    function redirect1(event){
    console.log('a')
            let that = $(event)
            let uuid = that.attr('dataid')
            window.location.href= `csm/showdatacompany.php?uuid=${uuid}`;
    }
     
    function redirect2(event){
        console.log('a')
        let that = $(event)
        let uuid = that.attr('dataid')
        window.location.href=`csm/update.php?uuid=${uuid}`;
    }

    function redirect3(event){
        console.log('a')
        let that = $(event)
        let uuid = that.attr('dataid')
        //window.location.href=`http://localhost:8000/users/delete/${uuid}`;

        var txt;
        if (confirm("Are you sure?")) {
            $.ajax({
                type: "POST",
                url: "http://localhost:8000/users/delete/" + uuid,
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