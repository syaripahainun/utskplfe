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
    //console.log('log')
    $.get("http://localhost:8000/profile/company/" + uuid,
    function(data, status){
        $.each(data.data.user, function(index, value){
            //alert(value.uuid);
            $("#name").text(value.name)
        });
    });

    $.get("http://localhost:8000/profile/company/" + uuid,
    function(data, status){
        $.each(data.data.user, function(index, value){
            $("#phone").text(value.phone)
        });
    });

    $.get("http://localhost:8000/profile/company/" + uuid,
    function(data, status){
        $.each(data.data.user, function(index, value){
            $("#id").text(value.id)
        });
    });

    $.get("http://localhost:8000/profile/company/" + uuid,
    function(data, status){
        $.each(data.data.user, function(index, value){
            $("#uuid").text(value.uuid)
        });
    });

    $.get("http://localhost:8000/profile/company/" + uuid,
    function(data, status){
        $.each(data.data.user, function(index, value){
            $("#email").text(value.email)
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
</script>
</body>
</html>