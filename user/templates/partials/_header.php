<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 0);

  $_SESSION['status'] = null;
  session_start();
?>
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="../asset/img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                            <div class="login d-flex">
                              <?php if ($_SESSION['status'] == "users") {
                                echo '<a href="/news/user/logout/">Logout</a>';
                              }
                              else {
                                echo '<a href="/news/user/login/">Login</a>';
                                echo '<a href="/news/user/register/">Register</a>';
                              }?>

                            </div>
                            <!-- Search Form -->
                            <div class="search-form">
                                <form method="post">
                                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                                    <button name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="../asset/img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class=<?php if($current_page == 'home'){ echo 'active';  } ?>><a href="/news/">Home</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'politics'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=politics">Politics</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'business'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=business">Business</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'technologies'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=technologies">Technology</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'health'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=health">Health</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'travel'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=travel">Travel</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'sports'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=sports">Sports</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'otomotive'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=otomotive">Otomotive</a></li>
                                <li class=<?php if($current_page == 'category' && $_GET['cat'] == 'foods'){ echo 'active';  } ?>><a href="/news/user/?page=category&cat=foods">Foods</a></li>
                                <li class=<?php if($current_page == 'about'){ echo 'active';  } ?>><a href="/news/user/?page=about">About</a></li>
                                <li class=<?php if($current_page == 'contact'){ echo 'active';  } ?>><a href="/news/user/?page=contact">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                            <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center mt-15">
                    <div class="news-title title2">
                        <p>International</p>
                    </div>
                    <div id="internationalTicker" class="ticker">
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                            <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->
<?php
  if(isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    echo '<script>location.replace("/news/user/?page=search&keyword='.$keyword.'")</script>';
  }
?>
