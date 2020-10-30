<?php
	include '../config.php';
	session_start();

	$dataDB 	= new dbConfig();
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM admin where username=:username and password=:password";
	$login = $dataDB->koneksi->prepare($query);
	$login->bindParam(":username", $username);
	$login->bindParam(":password", $password);
	$login->execute();
	$dataLogin = $login->fetch();

	if(!empty($dataLogin)) {
		error_reporting(E_ALL);
		ini_set('display_errors', 0);
		$_SESSION['username'] 	= $username;
		$_SESSION['status']		  = "admin";
		$_SESSION['id_admin'] 	= $dataLogin['id'];
		header("location:/news/admin/?page=191d721b7e4bc008c554ab2b523e1ec3");
	}
	else {
		header("location:index.php");
	}
?>
