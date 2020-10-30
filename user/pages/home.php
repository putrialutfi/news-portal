<?php
  include 'action.php';
  $dataDB = new DataDB();
?>

<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">

                    <!-- Single Featured Post -->
                    <div class="col-12 col-lg-7">
                        <div class="single-blog-post featured-post">
                            <div class="post-thumb">
                              <?php
                                $kategori = "politics";
                                $data = $dataDB->getLatestNews($kategori);
                              ?>
                                <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="/news/user/?page=category&cat=politics" class="post-catagory"><?php echo $data['kategori'] ?></a>
                                <a href="/news/user/?page=readmore&news=<?php echo base64_encode($data['id']) ?>" class="post-title">
                                    <h6><?php echo $data['judul_berita'] ?></h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-excerp"></p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-comment"><img src="../asset/img/core-img/chat.png" alt=""> <span><?php echo $dataDB->CommentCounter($data['id'])['jumlah']; ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                              <?php
                                $kategori = "business";
                                $data = $dataDB->getLatestNews($kategori);
                              ?>
                                <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="/news/user/?page=category&cat=business" class="post-catagory"><?php echo $data['kategori'] ?></a>
                                <div class="post-meta">
                                    <a href="/news/user/?page=readmore&news=<?php echo base64_encode($data['id']) ?>" class="post-title">
                                        <h6><?php echo $data['judul_berita'] ?></h6>
                                    </a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-comment"><img src="../asset/img/core-img/chat.png" alt=""> <span><?php echo $dataDB->CommentCounter($data['id'])['jumlah']; ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                              <?php
                                $kategori = "technologies";
                                $data = $dataDB->getLatestNews($kategori);
                              ?>
                                <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="/news/user/?page=category&cat=technologies" class="post-catagory"><?php echo $data['kategori'] ?></a>
                                <div class="post-meta">
                                    <a href="/news/user/?page=readmore&news=<?php echo base64_encode($data['id']) ?>" class="post-title">
                                        <h6><?php echo $data['judul_berita'] ?></h6>
                                    </a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-comment"><img src="../asset/img/core-img/chat.png" alt=""> <span><?php echo $dataDB->CommentCounter($data['id'])['jumlah']; ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                      <?php
                        $kategori = "health";
                        $data = $dataDB->getLatestNews($kategori);
                      ?>
                        <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="/news/user/?page=category&cat=health" class="post-catagory"><?php echo $data['kategori'] ?></a>
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

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                      <?php
                        $kategori = "travel";
                        $data = $dataDB->getLatestNews($kategori);
                      ?>
                        <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="/news/user/?page=category&cat=travel" class="post-catagory"><?php echo $data['kategori'] ?></a>
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

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                      <?php
                        $kategori = "sports";
                        $data = $dataDB->getLatestNews($kategori);
                      ?>
                        <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="/news/user/?page=category&cat=sports" class="post-catagory"><?php echo $data['kategori'] ?></a>
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

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                      <?php
                        $kategori = "otomotive";
                        $data = $dataDB->getLatestNews($kategori);
                      ?>
                        <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="/news/user/?page=category&cat=otomotive" class="post-catagory"><?php echo $data['kategori'] ?></a>
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

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                      <?php
                        $kategori = "foods";
                        $data = $dataDB->getLatestNews($kategori);
                      ?>
                        <a href="#"><img src="<?php echo "/news/admin/assets/img/".$data['gambar'] ?>" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="/news/user/?page=category&cat=foods" class="post-catagory"><?php echo $data['kategori'] ?></a>
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
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Post Area End ##### -->
