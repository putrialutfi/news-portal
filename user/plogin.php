<?php
	include '../config.php';
	session_start();

	$dataDB 	= new dbConfig();
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM users where username=:username and password=:password";
	$login = $dataDB->koneksi->prepare($query);
	$login->bindParam(":username", $username);
	$login->bindParam(":password", $password);
	$login->execute();
	$dataLogin = $login->fetch();

	if(!empty($dataLogin)) {
		error_reporting(E_ALL);
		ini_set('display_errors', 0);
		$_SESSION['nama'] 			= $dataLogin['nama'];
		$_SESSION['username'] 	= $username;
		$_SESSION['status']		  = "users";
		$_SESSION['id_user'] 	  = $dataLogin['id'];
		header("location:/news/user/?page=home");
	}
	else {
		header("location:/news/user/login/");
	}
?>
