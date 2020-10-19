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
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>

<!-- button -->
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
      //cekCookie();
      $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
      }
      var id = $.urlParam('id');

      $.get("http://localhost:8000/cse/outlet/report/" + id, function(data, status){
        $.each( data.data.user, function(index, value) {
          var body = '<tr>' 
           body += '<td>'+value.outlet_name+'</td>'
           body += '<td>'+value.company_name+'</td>'
           body += '<td>'+value.device_name+'</td>'
           body += '<td>'+value.Tanggal+'</td>'
           body += '<td>Rp '+value.amount+'</td>'
             body +='</tr>';
          $("#reportTable tbody").append(body);
        });
      });

      $.get("http://localhost:8000/cse/outlet/report/sum/" + id, function(data, status){
        $.each( data.data.user, function(index, value) {
          var foot = '<tr>'
           foot += '<td colspan="3"><b></td>'
           foot += '<td><b>Grand Total</td>'
           foot += '<td><b>Rp '+value.total+'</td>'
             foot +='</tr>';
          $("#reportTable tfoot").append(foot);
        });
        $("#reportTable").DataTable({
            dom: 'Bfrtip',
            buttons: [
            { extend: 'excelHtml5', footer: true },
            { extend: 'pdfHtml5', footer: true }
        ]
        });
      });

      $("#export").click(function(){
        $.get("http://localhost:8000/export", function(data, status){
            alert("Anda Berhasil Keluar");
          });
      });

      $("#tmblLogout").click(function(){
        if(confirm("Are you sure?")){
          $.get("http://localhost:8000/logout", function(data, status){
            setCookie("api_token", "", -1);
            setCookie("name", "", -1);
            setCookie("type", "", -1);
            window.location.href="../index.php";
            alert("Anda Berhasil Keluar");
          });
        }
      });
    });
    var nama = getCookie("name");
    $("#nameuser").text(nama);
</script>
</body>
</html>