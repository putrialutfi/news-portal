<?php
  include 'action.php';
  session_start();
  $dataDB = new DataDB();
  $id = $_GET['news'];
  $id = base64_decode($id);
  $id_user = $_SESSION['id_user'];
  $data = $dataDB->getDataDetail($id);
?>
<!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?php echo $data['kategori'] ?></a>
                                <span><?php echo date_format(date_create($data['created_at']), 'H:i'); ?></span> |
                                <span><?php echo date_format(date_create($data['created_at']), 'd M'); ?></span>
                                <a href="#" class="post-title">
                                    <h6><?php echo $data['judul_berita'] ?></h6>
                                </a>
                                <div class="post-meta">
                                    <p><?php echo $data['isi_berita'] ?></p>
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">

                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <a href="#" class="post-comment"><img src="../asset/img/core-img/chat.png" alt=""> <span><?php echo $dataDB->CommentCounter($id)['jumlah']; ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Area Start -->

                        <div class="comment_area clearfix">
                            <h5 class="title"><?php echo $dataDB->CommentCounter($id)['jumlah']; ?> Komentar</h5>
                            <?php
                              $komens = $dataDB->getComments($id);
                              foreach ($komens as $komen) {
                            ?>
                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author"><?php echo $komen['nama'] ?></a>
                                            <a href="#" class="post-date"><?php echo date_format(date_create($komen['commented_at']), 'd M Y H:i'); ?></a>
                                            <p><?php echo $komen['komentar'] ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                          <?php } ?>
                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Tinggalkan Komentar</h4>

                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <textarea name="komentar" class="form-control" id="komentar" cols="30" rows="10" placeholder="Komentar" required></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                          <input type="submit" name="createComment" value="Kirim" class="btn newspaper-btn mt-30 w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <?php
                              $datas = $dataDB->getSideNews();
                              foreach ($datas as $data) {
                            ?>
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="/news/user/?page=category&cat=<?php echo strtolower($data['kategori']) ?>" class="post-catagory"><?php echo $data['kategori'] ?></a>
                                    <div class="post-meta">
                                        <a href="/news/user/?page=readmore&news=<?php echo base64_encode($data['id']) ?>" class="post-title">
                                            <h6><?php echo $data['judul_berita'] ?></h6>
                                        </a>
                                        <p class="post-date">
                                          <span><?php echo date_format(date_create($data['created_at']), 'H:i'); ?></span> |
                                        <span><?php echo date_format(date_create($data['created_at']), 'd M'); ?></span></p>
                                    </div>
                                </div>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- tambah komentar -->
<?php
  if(isset($_POST['createComment'])) {
    if($id_user != null){
      $id_berita    = $id;
      $komentar     = $_POST['komentar'];

      $input = $dataDB->createComment($id_berita, $id_user, $komentar);
      if($input == "sukses") {
        echo '<script>
        window.history.back();
        </script>';
      }
      else {
        echo '<script> alert("komentar gagal ditambahkan.")</script>';
      }
    }
    else {
        echo '<script>location.replace("/news/user/login/");</script>';
    }
  }
?>
