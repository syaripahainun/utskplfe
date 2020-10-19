<?php include "sidebarld.php" ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h6>Devices</h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Devices</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Devices</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="deviceTable" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Device Name</th>
          <th>Company Name</th>
          <th>Owner Email</th>
          <th>Tier</th>
          <th>Last transaction</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include "templates/footerlad.php" ?>