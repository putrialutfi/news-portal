<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'partials/_head.php'; ?>
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <?php require_once 'partials/_header.php'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Container Area Start ##### -->
    <?php eval($content) ?>
    <!-- ##### Container Area End ##### -->

    <!-- ##### Footer Add Area Start ##### -->
    <?php require_once 'partials/_footer.php'; ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <?php require_once 'partials/_scripts.php'; ?>
</body>

</html>
