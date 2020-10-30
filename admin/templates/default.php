<!DOCTYPE html>
<html>
<head>
  <?php require_once 'partials/_head.php'; ?>
</head>
<body>
	<!-- header -->
  <?php require_once 'partials/_header.php'; ?>
  <!-- end header -->

  <!-- sidebar -->
  <?php require_once 'partials/_sidebar.php'; ?>
  <!--/.sidebar-->

  <!-- content -->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <?php eval($content) ?>
  </div>
	<!--/.content-->

	<!-- script -->
  <?php require_once 'partials/_scripts.php'; ?>
  <!-- /script -->
</body>
</html>
