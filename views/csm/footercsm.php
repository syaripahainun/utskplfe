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
<script src="cookie.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>

<script>
    $(document).ready(function() {
      //cekCookie();
      var nama = getCookie("name");
      $("#nameuser").text(nama);
      
      $.get("http://localhost:8000/users", function(data, status){
        $.each( data.data.users, function(index, value) {
          var row = 
          '<tr>' 
            + '<td>'+value.name+'</td>'
            + '<td>'+value.email+'</td>'
            + '<td>'+value.type+'</td>'
            + '<td>'
                +'<button class="btn btn-primary fas fa-eye read-one-user-button buttonshow" onclick="redirect(this)" dataid='+value.uuid+' style="margin: 5px;"> Show </button>';
                if (value.type == 'CSE'){
                  row += '<button class="btn btn-info fas fa-edit" onclick="redirect2(this)" dataid='+value.uuid+' style="margin: 5px;"> Edit </button>';
                  row += '<button type="submit" id="submit" class="btn btn-danger fas fa-trash-alt delete-user-button" onclick="redirect3(this)" dataid='+value.uuid+' style="margin: 5px;"> Delete </button>';
                  row += '<button class="btn btn-success fas fa-building" onclick="redirect4(this)" dataid='+value.uuid+' style="margin: 5px;"> Edit Company </button>';
                }
              row += '</td>'
          +'</tr>';
        $("#userTable").append(row);
        });
      });

      $("#tmblLogout").click(function(){
        if(confirm("Are you sure?")){
          $.get("http://localhost:8000/logout", function(data, status){
            setCookie("api_token", "", -1);
            setCookie("name", "", -1);
            setCookie("type", "", -1);
            setCookie("id", "", -1);
            window.location.href="../index.php";
            alert("Anda Berhasil Keluar");
          });
        }
      });
    });

    function redirect(event){
    console.log('a')
            let that = $(event)
            let uuid = that.attr('dataid')
            window.location.href= `csm/showdata_csm.php?uuid=${uuid}`;
    }
     
    function redirect2(event){
        console.log('a')
        let that = $(event)
        let uuid = that.attr('dataid')
        window.location.href=`csm/update_csm.php?uuid=${uuid}`;
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

    function redirect4(event){
        console.log('a')
        let that = $(event)
        let uuid = that.attr('dataid')
        window.location.href=`csm/company_csm.php?uuid=${uuid}`;
    }
</script>
</body>
</html>