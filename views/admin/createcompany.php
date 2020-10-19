<?php include "../templates/headersd.php" ?>
<?php include "../templates/navbar.php" ?>
<?php include "../templates/sidebarsd.php" ?>
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
            <h3 class="card-title">Create User Company</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                <label for="name">User_id</label>
                <input type="name" class="form-control" id="user_id" placeholder="Enter user_id">
              </div>
              <div class="form-group">
                <label for="name">Company_id</label>
                <input type="name" class="form-control" id="company_id" placeholder="Enter company_id">
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
</div>
<!-- /.content -->
<?php include "../templates/footercc.php" ?>