<?php
  include 'action.php';
  $dataDB = new DataDB();
  $no = 1;
  $datas   = $dataDB->getData();
?>
<div class="row">
	<ol class="breadcrumb">
		<li><a href="#">
			<em class="fa fa-home"></em>
		</a></li>
		<li class="active">Forms</li>
	</ol>
</div><!--/.row-->

<div class="panel panel-default">
	<div class="panel-heading">Data Berita</div><br>
  <a href="?page=<?php echo $dataDB->md5Conv('form_add'); ?>" class="btn btn-primary" style="margin-left: 30px"><i class="fa fa-plus"></i> Tambah Data</a><br>
		<div class="panel-body">
			<div class="col-md-12">
				<table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No. </th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Waktu</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($datas as $data) { ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['judul_berita'] ?></td>
              <td><?php echo $data['kategori'] ?></td>
              <td><?php echo $data['created_at'] ?></td>
              <td>
                <a class="btn btn-xs btn-info" href="?page=<?php echo $dataDB->md5Conv('detail'); ?>&id=<?php echo base64_encode($data['id']);?>" alt="Detail Data"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a class="btn btn-xs btn-warning" href="?page=<?php echo $dataDB->md5Conv('edit'); ?>&id=<?php echo base64_encode($data['id']);?>" alt="Edit Data"><i class="glyphicon glyphicon-pencil"></i></a>
                <a class="btn btn-xs btn-danger" href="?page=<?php echo $dataDB->md5Conv('table'); ?>&delete=<?php echo base64_encode($data['id']);?>" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA?')"> <i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
		</div>
	</div>

<!-- hapus data -->
<?php
  if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $id = base64_decode($id);
    $delete = $dataDB->deleteData($id);
    if($delete == "sukses") {
      echo '<script> location.replace("/news/admin/?page='. $dataDB->md5Conv('table') .'"); </script>';
    }
    else {
      echo '<script> alert("Data gagal dihapus")</script>';
    }
  }
?>
