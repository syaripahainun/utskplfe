<?php include "templates/headeroutlets.php" ?>
<?php include "sidebaro_cse.php" ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h6>Outlets</h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Outlets</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Outlets</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="outletsTable" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Outlets Name</th>
          <th>Company Name</th>
          <th>Owner Email</th>
          <th>Tier</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include "footeroutlets_cse.php" ?>