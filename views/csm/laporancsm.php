<?php include "templates/sidebarcsm.php" ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h6>Laporan</h6>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Laporan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data CSE</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="cseTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Company</th>
              </tr>
              </thead>
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
</div>
<?php include "footerl_csm.php" ?>