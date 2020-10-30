<?php
  include 'action.php';
  $dataDB = new DataDB();
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
	<div class="panel-heading">Forms</div>
		<div class="panel-body">
			<div class="col-md-12">
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul Berita</label>
						<input class="form-control" name="judul_berita" placeholder="Judul Berita" required>
					</div>
          <div class="form-group">
						<label>Isi Berita</label>
						<textarea class="form-control" name="isi_berita" rows="3" required></textarea>
					</div>
          <div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="kategori_brt" required>
              <?php
                $data = $dataDB->getKategori();
                echo "<option value=''>-- Kategori --</option>";
                foreach ($data as $row):
                echo "<option value=" .  $row['id_kategori'] . ">" .  $row['kategori'] . "</option>";
                endforeach
              ?>
						</select>
					</div>
          <div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar" accept="image/x-png,image/gif,image/jpeg" required>
					</div>
				</div>
        <input type="submit" name="createData" value="Tambah" class="btn btn-primary btn-block" style="margin-right: 15px;">
			</form>
		</div>
	</div>

<?php
  if(isset($_POST['createData'])) {
    $judul_berita = $_POST['judul_berita'];
    $isi_berita   = $_POST['isi_berita'];
    $kategori     = $_POST['kategori_brt'];
    $gambar       = $_FILES['gambar']['name'];
    $tmp          = $_FILES['gambar']['tmp_name'];
    $gmbr_name    = date('dmYHis').$gambar;
    $path_name    = "assets/img/".$gmbr_name;

    $input = $dataDB->createData($judul_berita, $isi_berita, $kategori, $gambar, $tmp, $gmbr_name, $path_name);
    if($input == "sukses") {
      echo '<script> location.replace("/news/admin/?page='. $dataDB->md5Conv('table') .'"); </script>';
    }
    else {
      echo '<script> alert("Data gagal ditambahkan. Mohon Periksa Kembali.")</script>';
    }
  }
?>
