<?php include "templates/header.php" ?>
<?php include "templates/navbar.php" ?>
 	<?php
 	if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == ''){
		 include 'admin/dashboard_admin.php';
		 
 	}elseif (@$_GET['page'] == 'createuser') {
		 include 'admin/createuser_admin.php';
		 
 	}elseif (@$_GET['page'] == 'listuser') {
		 include 'admin/listuser_admin.php';
		 
 	}elseif (@$_GET['page'] == 'laporan') {
		 include 'admin/laporan.php';

	}elseif (@$_GET['page'] == 'laporancompany') {
		include 'admin/laporancompany.php';

	}elseif (@$_GET['page'] == 'laporandevices') {
		include 'admin/laporandevices.php';
		 
 	}elseif (@$_GET['page'] == 'outlets') {
		include 'admin/listoutlets.php';

	}elseif (@$_GET['page'] == 'users') {
		include 'admin/listusers.php';

	}elseif (@$_GET['page'] == 'devices') {
		include 'admin/listdevices.php';

	}elseif (@$_GET['page'] == 'transactions') {
		   include 'admin/listtransactions.php';
		   
 	}elseif (@$_GET['page'] == 'companies') {
		include 'admin/listcompanies.php';
	}
 	?>