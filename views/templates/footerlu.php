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
    $.get("http://localhost:8000/listusers",  function(data, status){
        $.each(data.data.users, function(index, value) {
            var body = '<tr>'
              body += '<td>'+value.name+'</td>'
              body += '<td>'+value.email+'</td>'
              body += '<td>'+value.phone+'</td>'
              body += '</tr>';
              $("#users tbody").append(body);
        });
        $("#users").DataTable();
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
</script>
</body>
</html>