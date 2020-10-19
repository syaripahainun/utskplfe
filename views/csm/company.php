<?php include "templates/headercompany.php" ?>
<?php include "sidebarc.php" ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h6>Companies</h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Companies</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Company</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="companyTable" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Company Name</th>
          <th>Tier</th>
          <th>Owner Email</th>
          <th>Tanggal</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include "footercompanies_csm.php" ?>