<?php include "templates/sidebarcu.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h6>Create Users</h6>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <!-- left column -->
      <div class="col-md-6 col-xs-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create User</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body justify-content-align-center">
              <div class="form-group col-md-12">
                <label for="name">Name</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="name" class="form-control" id="name" placeholder="Enter name" required>
              </div>
              <div class="form-group">
                <label for="email">NIM</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" placeholder="Enter NIM" required>
              </div>

              <div class="form-group">
                <label for="email">Nama Fakultas</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" placeholder="Enter " required>
              </div>

              <div class="form-group">
                <label for="email">Nama Prodi</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" placeholder="Enter " required>
              </div>

              <div class="form-group">
                <label for="email">Agama</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
              </div>

              <div class="form-group">
                <label for="email">Tgl Lahir</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
              </div>
              
              <div class="form-group">
                <label for="password">Alamat</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input required type="password" class="form-control" id="password" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="password">Gender</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                </div>
                <select class="form-control" id="type" required>
                  <option selected disabled value="">Choose..</option>
                  <option value="CSM">Perempuan</option>
                  <option value="CSE">Laki</option>
                  </select>
              </div>
            </div>
            <!-- /.card-body -->
              <button type="submit" id="tmblSubmit" class="btn btn-primary">Submit
              <span class="fas fa-check"></button>
              
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
</div>
<!-- /.content -->
<?php include "templates/footercu.php" ?>