<?php
	$hlm='';
	$dashboard  = $dataDB->md5Conv('dashboard');
	$table 			= $dataDB->md5Conv('table');
	$form_add  	= $dataDB->md5Conv('form_add');
	$detail   	= $dataDB->md5Conv('detail');
	$edit     	= $dataDB->md5Conv('edit');

	if (isset($_GET['page'])) {
		$hlm=$_GET['page'];
	}

	$current_page=$hlm;

	switch ($hlm) {

		case $dashboard:
			$hlm="include 'pages/dashboard.php';";
			break;

		case $table:
			$hlm="include 'pages/table.php';";
			break;

		case $form_add:
			$hlm="include 'pages/form_add.php';";
			break;

		case $detail:
			$hlm="include 'pages/detail.php';";
			break;

		case $edit:
			$hlm="include 'pages/edit.php';";
			break;

		default:
		$hlm = "echo '<h1>SELAMAT MENCOBA</h1>';";
	}

	$content=$hlm;
?>
