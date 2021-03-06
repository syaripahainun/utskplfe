<?php include "../templates/headersd.php" ?>
<?php include "../templates/navbar.php" ?>
<?php include "../templates/sidebarsd.php" ?>
<body>
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left" id="box">
                    <h6>Show User</h6>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="row justify-content-md-center">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-sm-12">
            <table class="table table-bordered table-hover" id="tableuser">
              <thead>
                <tr>
                    <th>UUID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
            <div class="pull-right">
              <a class="btn btn-success" href="../indexadmin.php?page=listuser"> Back</a>
            </div>
            <div>
            </div>
          </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- product data will be shown in this table -->
</div>
</body>
<?php include "../templates/footersd.php" ?>
