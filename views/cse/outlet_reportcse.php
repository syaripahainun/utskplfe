<?php include "../templates/headeroutlet.php" ?>
<?php include "../templates/navbarcse.php" ?>
<?php include "sidebaror_cse.php" ?>
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
      <h3 class="card-title">Outlet Report</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="reportTable" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Outlets Name</th>
          <th>Company Name</th>
          <th>Device Name</th>
          <th>Tanggal</th>
          <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
    <div class="pull-right">
      <a class="btn btn-danger" href="../indexcse.php?page=outlet" style="margin-left: 20px; margin-bottom: 50px"> Back </a>
      <!-- <a class="btn btn-primary" href="#" style="margin-left: 1075px; margin-top: 20px;" id="export"> Export </a> -->
    </div>
  </div>
</div>
<?php include "footeroutletreport_cse.php" ?>