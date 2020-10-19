<?php include "../templates/headeru.php" ?>
<?php include "../templates/navbar.php" ?>
<?php include "../templates/sidebaruu.php" ?>

<body>
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h6>Update Users</h6>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../indexadmin.php?page=listuser">Home</a></li>
          <li class="breadcrumb-item active">Update</li>
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
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Update User</h3>
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
                <label for="email">Email</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
              </div>
              
              <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input required type="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="password">Type</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                </div>
                <select class="form-control" id="type" required>
                  <option selected disabled value="">Choose..</option>
                  <option value="CSM">CSM</option>
                  <option value="CSE">CSE</option>
                  </select>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            <button type="submit" class="btn btn-success" id="submit">Save Changes</button>

          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
</div>
<?php include "../templates/footeru_admin.php" ?>