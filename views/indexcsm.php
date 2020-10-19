<?php include "templates/navbarcsm.php" ?>
<?php
 	if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == ''){
 		include 'csm/dashboard_csm.php';
 	}elseif (@$_GET['page'] == 'createuser') {
 		include 'csm/createuser_csm.php';
 	}elseif (@$_GET['page'] == 'listuser') {
 		include 'csm/listuser_csm.php';
 	}elseif (@$_GET['page'] == 'laporan') {
 		include 'csm/laporancsm.php';
 	}elseif (@$_GET['page'] == 'devices') {
 		include 'csm/devices.php';
 	}elseif (@$_GET['page'] == 'company') {
 		include 'csm/company.php';
 	}elseif (@$_GET['page'] == 'outlet') {
 		include 'csm/outlets_csm.php';
 	}
 	?>
