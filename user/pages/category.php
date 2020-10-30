<?php
  include 'action.php';
  $dataDB = new DataDB();
  $id = $_GET['cat'];
  $datas = $dataDB->getData($id);
?>
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <?php foreach ($datas as $data) { ?>
                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                                <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?php echo $data['kategori'] ?></a>
                                <a href="/news/user/?page=readmore&news=<?php echo base64_encode($data['id']) ?>" class="post-title">
                                    <h6><?php echo $data['judul_berita'] ?></h6>
                                </a>
                                <div class="post-meta">
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-comment"><img src="../asset/img/core-img/chat.png" alt=""> <span><?php echo $dataDB->CommentCounter($data['id'])['jumlah']; ?></span></a>
                                    </div>
                                </div>
                            </div>
                          <?php } ?>
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
