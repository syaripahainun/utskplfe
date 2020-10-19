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
      $.get("http://localhost:8000/cse", function(data, status){
        $.each( data.data.users, function(index, value) {
          var body = '<tr>' 
            body += '<td>'+value.name+'</td>'
            body += '<td>'+value.email+'</td>'
            body += '<td>'+value.type+'</td>'
            body += '<td>'
                body += '<button class="btn btn-info read-one-user-button buttonshow" onclick="redirect(this)" dataid='+value.id+'> Show </button>'
            body += '</td>'
          body +='</tr>';
        $("#cseTable tbody").append(row);
        });
        $("#cseTable").DataTable();
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
            let id = that.attr('dataid')
            window.location.href= `csm/showcompany.php?user_id=${id}`;
    }
</script>
</body>
</html>