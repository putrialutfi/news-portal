<?php
  include 'action.php';
  $dataDB = new DataDB();
  $id = $_GET['id'];
  $id = base64_decode($id);
  $datas = $dataDB->getDataDetail($id);
?>
<div class="row">
	<ol class="breadcrumb">
		<li><a href="#">
			<em class="fa fa-home"></em>
		</a></li>
		<li class="active">Forms</li>
	</ol>
</div><!--/.row-->

<div class="panel panel-default articles">
	<div class="panel-heading">
		Detail Berita | <span style="color:red; font-weight: bold;"><?php echo strtoupper($datas['kategori']); ?></span>
    <a class="pull-right btn btn-warning" href="?page=<?php echo $dataDB->md5Conv('edit'); ?>&id=<?php echo base64_encode($datas['id']);?>" alt="Edit Data"><i class="glyphicon glyphicon-pencil"></i>EDIT DATA</a>
	</div>
	<div class="panel-body articles-container">
		<div class="article border-bottom">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-2 col-md-2 date">
						<div class="large"><?php echo date_format(date_create($datas['created_at']), 'H:i'); ?></div>
						<div class="text-muted" style="color:black;"><?php echo date_format(date_create($datas['created_at']), 'Y-m-d'); ?></div>
					</div>
					<div class="col-xs-10 col-md-10">
						<h4><?php echo $datas['judul_berita'] ?></h4>
						<p><?php echo $datas['isi_berita'] ?></p>
					</div>
          <div class="col-xs-4 col-md-4 date">
            <img src="<?php echo "assets/img/".$datas['gambar'] ?>" width="100%" height="30%">
          </div>
				</div>
			</div>
			<div class="clear"></div>
		</div><!--End .article-->
	</div>
</div><!--End .articles-->
