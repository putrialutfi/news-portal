
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="post" action="../plogin.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							<input type="submit" class="btn btn-danger" value="Masuk"/>
							<a href="/news/user/register/">Belum Punya Akun? Daftar</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="/news/asset/js/jquery/jquery-2.2.4.min.js"></script>
	<script src="/news/asset/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>
