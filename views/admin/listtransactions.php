<?php include "templates/sidebar.php" ?>
<body>
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left" id="box">
                    <h6>Show Transactions</h6>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
<section class="content">
  <div class="row justify-content-md-center">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Transactions</h3>
          
        </div>
        <!-- <div class="pull-right">
              <a class="btn btn-success" href="../indexadmin.php?page=listuser"> Back</a>
            </div> -->
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-sm-12">
            <table class="table table-bordered table-hover" id="transactions">
                <thead>
                  <tr>
                    <th>Receipt Code</th>
                    <th>Customer Name</th> 
                    <th>Final Amount</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
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
<?php include "templates/footerlt.php" ?>
