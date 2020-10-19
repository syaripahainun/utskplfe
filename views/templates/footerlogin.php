<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="views/cookie.js"></script>
<script>
  $(document).ready(function(){
    $("#btnLogin").click(function(){
      $.post("http://localhost:8000/login",
      {
        email : $("#txtEmail").val(),
        password : $("#txtPassword").val()
      },

      function(data, status){
        if (data.success = data.success){
          // alert("berhasil");
          setCookie("api_token", data.data.api_token, 7);
          setCookie("tipe", data.data.user.type, 7);
          setCookie("name", data.data.user.name, 7);
          setCookie("id", data.data.user.id, 7);
          var cek = getCookie("tipe");
            if (cek == 'admin'){
              window.location.href="views/indexadmin.php";
            }else if (cek == 'CSM'){
              window.location.href="views/indexcsm.php";
            }else if (cek == 'CSE'){
              window.location.href="views/indexcse.php";
            }
        }else if(data.message = data.message) {
          // console.log(data.message)
          alert("Login Gagal! Cek Kembali Email dan Password");
        }else {
          alert("Email dan password Harus Terisi !");
        }
        //window.location.href="views/indexcse.php";
      });
      return false;
    });
    /*function validasi() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("alamat").value;
      if (password != "" && email!="") {
        return true;
      }else{
        alert('Anda harus mengisi data dengan lengkap !');
      }
    }*/
  });
</script>
</html>
