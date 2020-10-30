
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="/news/admin/assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/news/admin/assets/css/styles.css">
	<!--[if lt IE 9]>
	<script src="/news/asset/js/html5shiv.js"></script>
	<script src="/news/asset/js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-color:#ee002d;">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Daftar</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
              <div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="email" autofocus="" required>
							</div>
              <div class="form-group">
								<input class="form-control" placeholder="Nama" name="nama" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							<input type="submit" name="register" class="btn btn-danger" value="Daftar"/>
              <a href="/news/user/login/">Sudah Punya Akun? Masuk</a>
						</fieldset>
					</form>
					<span><?php $message ?></span>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="/news/asset/js/jquery/jquery-2.2.4.min.js"></script>
	<script src="/news/asset/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>

<?php
  if(isset($_POST['register'])) {
    include '../config.php';
    $dataDB = new dbConfig();
    $email = $_POST['email'];
    $nama  = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $input = $dataDB->koneksi->prepare("INSERT INTO users (email, nama,
      username, password) VALUES (:email, :nama, :username, :password)");
    $input->bindParam(":email", strip_tags($email));
    $input->bindParam(":nama", strip_tags($nama));
    $input->bindParam(":username", strip_tags($username));
    $input->bindParam(":password", strip_tags($password));
    $input->execute();

    if($input) {
      echo '<script>location.replace("/news/user/login/");</script>';
    }
    else {
      echo '<script>location.replace("/news/user/register/");</script>';
    }
  }
?>
