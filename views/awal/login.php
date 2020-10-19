<?php include "views/templates/headerlogin.php" ?>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="media-body">
        <a class="navbar-brand" href="#"></a>
          <img src="assets/dist/img/pawoon.png" style="width: 200px; display: block; margin: auto;"\>
      </div>
    </nav>
     <div class="container">
       <h4 class="text-center">LOGIN</h4>
       <hr></hr>

       <form action="#" onsubmit="validasi()">
         <div class="form-group">
          <label>Email</label>
          <input type="Email" name="email" id="txtEmail" name="" class="form-control" placeholder="Masukkan Email Anda" required>
         </div>

         <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" id="txtPassword" class="form-control" placeholder="Masukkan Password Anda" required>
         </div>

         <button id="btnLogin" class="bt btn-primary" href="#">Submit</button>
       </form>
  </body>
<?php include "views/templates/footerlogin.php" ?>


