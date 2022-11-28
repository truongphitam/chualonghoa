<?php
/*
Template Name: Trang chủ
*/
get_header();
global $maxthemes;
?>
<div class="site-wrapper-reveal no-overflow">
    <div class="hero-area">
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-theme owl-banners">
                    <div class="item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/christian-hero-bg-01.png" alt="" class="img-fluid">
                    </div>
                    <div class="item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/christian-hero-bg-01.png" alt="" class="img-fluid">
                    </div>
                    <div class="item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/christian-hero-bg-01.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray">
        <div class="service-area section-space--ptb_120 service-top-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-muslim text-center">
                            <h3 class="">Tin mới</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme owl-news">
                        <?php for ($i = 0; $i < 10; $i++){?>
                        <div class="item">
                            <article class="block">
                                <a href="/tin-tuc/chi-tiet-gioi-thieu-an-pham-moi-ang-may-giua-doi-quyen-1-5403/"
                                    title="Giới thiệu ấn phẩm mới: Áng mây giữa đời (Quyển 1)" class="absolute"></a>
                                <div class="thumb-res wide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/christian-hero-bg-01.png" alt="" class="img-fluid">
                                </div>
                                <div class="info ellips">
                                    <div class="tt text-dark bold">Giới thiệu ấn phẩm mới <?php echo $i; ?></div>
                                    <div class="desc text-disable">12/11/2020</div>
                                    <div class="desc">Có lẽ chúng ta nghĩ tác giả sẽ khơi mào cho những cung bậc cảm xúc
                                        hay những du hí chốn hồng trần....</div>
                                </div>
                            </article>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tai-about-area">
            <div class="container-fluid pl-0 pr-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-6">
                        <div class="about-tai-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/christian-about.png" class="img-fluid"
                                alt="Christian Images">
                        </div>
                    </div>
                    <div class="col-lg-6 small-mt__30 tablet-mt__30 small-mb__60 tablet-mb__60">
                        <div class="about-tai-content col-06__right">
                            <div class="section-title-wrap">
                                <h3 class="section-title left-style">Lịch sử về chùa</h3>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters.</p>
                            <div class="about-us-button mt-40">
                                <a class="about-us-btn" href="#">Xem thêm</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="classes-area section-space--ptb_120">
        <div class="container">
            <div class="row">
                <h4 class="line-100">Phật sự</h4>
            </div>
            <div class="row">
                <div class="relatives">
                    <div class="tab-on-right clearfix">
                        <div class="tab-over-wrap">
                            <div class="tab-over">
                                <ul class="tab-list nav nav-tabs">
                                    <li class="active"><a href="/tin-tuc/trong-nuoc-91/" title="Trong Nước">Trong
                                            Nước</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/nuoc-ngoai-95/" title="Nước Ngoài">Nước
                                            Ngoài</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/bai-viet-100/" title="Bài viết">Bài viết</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/suc-khoe-96/" title="Sức Khỏe">Sức Khỏe</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/giao-duc-97/" title="Giáo Dục">Giáo Dục</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/chuyen-muc-tu-van-76/"
                                            title="Chuyên mục tư vấn">Chuyên mục tư vấn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="owl-carousel owl-theme owl-news">
                        <?php for ($i = 0; $i < 10; $i++){?>
                        <div class="item">
                            <article class="block">
                                <a href="/tin-tuc/chi-tiet-gioi-thieu-an-pham-moi-ang-may-giua-doi-quyen-1-5403/"
                                    title="Giới thiệu ấn phẩm mới: Áng mây giữa đời (Quyển 1)" class="absolute"></a>
                                <div class="thumb-res wide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/christian-hero-bg-01.png" alt="" class="img-fluid">
                                </div>
                                <div class="info ellips">
                                    <div class="tt text-dark bold">Giới thiệu ấn phẩm mới <?php echo $i; ?></div>
                                    <div class="desc text-disable">12/11/2020</div>
                                    <div class="desc">Có lẽ chúng ta nghĩ tác giả sẽ khơi mào cho những cung bậc cảm xúc
                                        hay những du hí chốn hồng trần....</div>
                                </div>
                            </article>
                        </div>
                        <?php }?>
                    </div>
                </div>
        </div>
    </div>
    <div class="classes-area pb_120">
        <div class="container">
            <div class="row">
                <h4 class="line-100">Phật Giáo & Đời Sống</h4>
            </div>
            <div class="row">
                <div class="relatives">
                    <div class="tab-on-right clearfix">
                        <div class="tab-over-wrap">
                            <div class="tab-over">
                                <ul class="tab-list nav nav-tabs">
                                    <li class="active"><a href="/tin-tuc/trong-nuoc-91/" title="Trong Nước">Trong
                                            Nước</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/nuoc-ngoai-95/" title="Nước Ngoài">Nước
                                            Ngoài</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/bai-viet-100/" title="Bài viết">Bài viết</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/suc-khoe-96/" title="Sức Khỏe">Sức Khỏe</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/giao-duc-97/" title="Giáo Dục">Giáo Dục</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/chuyen-muc-tu-van-76/"
                                            title="Chuyên mục tư vấn">Chuyên mục tư vấn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="owl-carousel owl-theme owl-news">
                        <?php for ($i = 0; $i < 10; $i++){?>
                        <div class="item">
                            <article class="block">
                                <a href="/tin-tuc/chi-tiet-gioi-thieu-an-pham-moi-ang-may-giua-doi-quyen-1-5403/"
                                    title="Giới thiệu ấn phẩm mới: Áng mây giữa đời (Quyển 1)" class="absolute"></a>
                                <div class="thumb-res wide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/christian-hero-bg-01.png" alt="" class="img-fluid">
                                </div>
                                <div class="info ellips">
                                    <div class="tt text-dark bold">Giới thiệu ấn phẩm mới <?php echo $i; ?></div>
                                    <div class="desc text-disable">12/11/2020</div>
                                    <div class="desc">Có lẽ chúng ta nghĩ tác giả sẽ khơi mào cho những cung bậc cảm xúc
                                        hay những du hí chốn hồng trần....</div>
                                </div>
                            </article>
                        </div>
                        <?php }?>
                    </div>
                </div>
        </div>
    </div>
    <div class="classes-area pb_120">
        <div class="container">
            <div class="row">
                <h4 class="line-100">Phật giáo & Xã Hội</h4>
            </div>
            <div class="row">
                <div class="relatives">
                    <div class="tab-on-right clearfix">
                        <div class="tab-over-wrap">
                            <div class="tab-over">
                                <ul class="tab-list nav nav-tabs">
                                    <li class="active"><a href="/tin-tuc/trong-nuoc-91/" title="Trong Nước">Trong
                                            Nước</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/nuoc-ngoai-95/" title="Nước Ngoài">Nước
                                            Ngoài</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/bai-viet-100/" title="Bài viết">Bài viết</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/suc-khoe-96/" title="Sức Khỏe">Sức Khỏe</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/giao-duc-97/" title="Giáo Dục">Giáo Dục</a>
                                    </li>
                                    <li class="active"><a href="/tin-tuc/chuyen-muc-tu-van-76/"
                                            title="Chuyên mục tư vấn">Chuyên mục tư vấn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="owl-carousel owl-theme owl-news">
                        <?php for ($i = 0; $i < 10; $i++){?>
                        <div class="item">
                            <article class="block">
                                <a href="/tin-tuc/chi-tiet-gioi-thieu-an-pham-moi-ang-may-giua-doi-quyen-1-5403/"
                                    title="Giới thiệu ấn phẩm mới: Áng mây giữa đời (Quyển 1)" class="absolute"></a>
                                <div class="thumb-res wide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/christian-hero-bg-01.png" alt="" class="img-fluid">
                                </div>
                                <div class="info ellips">
                                    <div class="tt text-dark bold">Giới thiệu ấn phẩm mới <?php echo $i; ?></div>
                                    <div class="desc text-disable">12/11/2020</div>
                                    <div class="desc">Có lẽ chúng ta nghĩ tác giả sẽ khơi mào cho những cung bậc cảm xúc
                                        hay những du hí chốn hồng trần....</div>
                                </div>
                            </article>
                        </div>
                        <?php }?>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>