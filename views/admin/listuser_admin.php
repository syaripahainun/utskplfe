<?php include "templates/sidebarlu.php" ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h6>User Management</h6>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">UserManagement</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data User</h3>
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="userTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th width=25%>NIM</th>
                <th>Nama</th>
                <th>Nama Fakultas</th>
                <th width=35%>Action</th> 
              </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<?php include "templates/footer.php" ?>

