<?php include "templates/navbarcse.php" ?>
<?php
 	if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == ''){
 		include 'cse/dashboard_cse.php';
 	}elseif (@$_GET['page'] == 'listuser') {
 		include 'cse/listuser_cse.php';
 	}elseif (@$_GET['page'] == 'laporan') {
 		include 'cse/laporan_cse.php';
 	}elseif (@$_GET['page'] == 'devices') {
 		include 'cse/devices.php';
 	}elseif (@$_GET['page'] == 'company') {
 		include 'cse/company.php';
 	}elseif (@$_GET['page'] == 'outlet') {
 		include 'cse/outlets.php';
 	}
?>