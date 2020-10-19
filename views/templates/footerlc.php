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

<!-- button -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<scipt src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
<scipt src="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"></script>
<scipt src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<scipt src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<scipt src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<scipt src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<scipt src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<scipt src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.jss"></script>
<scipt src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>


<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
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
    var nama = getCookie("name");
    $("#nameuser").text(nama);

    $.get("http://localhost:8000/listcompanies",  function(data, status){
        $.each(data.data.companies, function(index, value) {
            var body = '<tr>'
              body += '<td>'+value.name+'</td>'
              body += '<td>'+value.address+'</td>'
              body += '<td>'+value.phone+'</td>'
              body += '</tr>';
              $("#company tbody").append(body);
        });
        $("#company").DataTable();
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