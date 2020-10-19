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
<script>
    $(document).ready(function(){
        //cekCookie(); 
        $.urlParam = function(name){
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results[1] || 0;
        }

        var uuid =$.urlParam('uuid');
        $.get("http://localhost:8000/users/" + uuid,
        function(data, status){
        // $.each(data.data.user, function(index, value) {
            //alert(data.data.user.uuid);

        $("#name").val(data.data.user.name);
        $("#email").val(data.data.user.email);
        $("#password").val(data.data.user.password);
        $("#type").val(data.data.user.type);

        $("#submit").click(function(){
            $.ajax({
                url: "http://localhost:8000/users/update/" + uuid,
                type: "POST",
                data: {
                        name : $("#name").val(),
                        email : $("#email").val(),
                        password : $("#password").val(),
                        type : $("#type").val()
                    },
                success: function(data) {
                    alert("Data: " + data);
                    window.location.href=`../admin/showdata2.php?uuid=${uuid}`;
                    return false;
                }
            });
        });
    });
});
</script>
</body>
</html>