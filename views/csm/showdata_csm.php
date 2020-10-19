<?php include "../templates/headersd.php" ?>
<?php include "../templates/navbarcsm.php" ?>
<?php include "sidebarsd_csm.php" ?>
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
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-md-6 col-xs-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
               

                <h3 class="profile-username text-center" id="name">Name</h3>

                <p class="text-muted text-center" id="type">type</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>ID</b><a class="float-right" id="id"></a>
                    </li>
                  <li class="list-group-item">
                    <b>UUID</b> <a class="float-right" id="uuid"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right" id="email"></a>
                  </li>
                </ul>

                <a href="../indexcsm.php?page=listuser" class="btn btn-primary"><b>Back</b></a>
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