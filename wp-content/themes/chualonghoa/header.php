<?php
global $maxthemes;
?>
<!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chùa Long Hoa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body>
    <div class="header-area header-area--default">
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center">
                        <div class="header__logo">
                            <div class="logo">
                                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" class="logo-new"></a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header__navigation menu-style-three d-none d-lg-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li class="has-children active">
                                            <a href="/"><span>Trang chủ</span></a>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="about.php"><span>Giới thiệu</span></a>
                                            <ul class="submenu">
                                                <li><a href="#"><span>Tiểu sử sư tổ</span></a></li>
                                                <li><a href="#"><span>Về chùa</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="#"><span>Tin tức</span></a>
                                            <ul class="submenu">
                                                <li><a href="news.php"><span>Phật Sự</span></a></li>
                                                <li><a href="news.php"><span>Phật Giáo & Đời Sống</span></a></li>
                                                <li><a href="news.php"><span>Phật giáo & Xã Hội</span></a></li>
                                                <li><a href="news.php"><span>Phật giáo & Tuổi trẻ</span></a></li>
                                                <li><a href="news.php"><span>Văn Học Phật Giáo</span></a></li>
                                                <li><a href="#"><span>Pháp môn niệm Phật</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="#"><span>Thư viện</span></a>
                                            <ul class="submenu">
                                                <li><a href="gallery.php"><span>Hình ảnh</span></a></li>
                                                <li><a href="#"><span>Video</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>

                            </div>

                            <div class="header-btn text-right d-none d-sm-block ml-lg-4">
                                <a class="btn-circle btn-default btn" href="contact.php">Liên hệ</a>
                            </div>

                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>