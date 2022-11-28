<?php
namespace max_themes\components\frontend;

class enqueue
{

	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'addStyles'));
		add_action('wp_enqueue_scripts', array($this, 'addScripts'));
	}
	public function addStyles()
	{
	
		wp_enqueue_style('bootstrap', MAXTHEMES_URI_ASSET . 'assets/css/vendor/bootstrap.min.css');
		wp_enqueue_style('flaticon', MAXTHEMES_URI_ASSET . 'assets/css/vendor/flaticon.css');
		wp_enqueue_style('swiper', MAXTHEMES_URI_ASSET . 'assets/css/plugins/swiper.min.css');
		wp_enqueue_style('magnific', MAXTHEMES_URI_ASSET . 'assets/css/plugins/magnific-popup.css');
		wp_enqueue_style('style', MAXTHEMES_URI_ASSET . 'assets/css/style.css');
		wp_enqueue_style('owlcarousel', MAXTHEMES_URI_ASSET . 'assets/owlcarousel/css/owl.carousel.min.css');
		wp_enqueue_style('owlcarousel-theme', MAXTHEMES_URI_ASSET . 'assets/owlcarousel/css/owl.theme.default.min.css');
		wp_enqueue_style('googleapis',  'https://fonts.googleapis.com');
		wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
		wp_enqueue_style('roboto',  'https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap');
		wp_enqueue_style('roboto-condensed', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
		wp_enqueue_style('kai', MAXTHEMES_URI_ASSET . 'assets/css/kai.css');
	}
	public function addScripts()
	{
		wp_enqueue_script('modernizr', MAXTHEMES_URI_ASSET . 'assets/js/vendor/modernizr-2.8.3.min.js', array(), '', true);
		wp_enqueue_script('jquery-min', MAXTHEMES_URI_ASSET . 'assets/js/vendor/jquery-3.5.1.min.js', array(), '', true);
		wp_enqueue_script('jquery-migrate-3', MAXTHEMES_URI_ASSET . 'assets/js/vendor/jquery-migrate-3.3.0.min.js', array(), '', true);
		wp_enqueue_script('bootstrap', MAXTHEMES_URI_ASSET . 'assets/js/vendor/bootstrap.min.js', array(), '', true);
		wp_enqueue_script('swiper', MAXTHEMES_URI_ASSET . 'assets/js/plugins/swiper.min.js', array(), '', true);
		wp_enqueue_script('waypoints', MAXTHEMES_URI_ASSET . 'assets/js/plugins/waypoints.min.js', array(), '', true);
		wp_enqueue_script('counterup', MAXTHEMES_URI_ASSET . 'assets/js/plugins/counterup.min.js', array(), '', true);
		wp_enqueue_script('magnific', MAXTHEMES_URI_ASSET . 'assets/js/plugins/jquery.magnific-popup.min.js', array(), '', true);
		wp_enqueue_script('wow', MAXTHEMES_URI_ASSET . 'assets/js/plugins/wow.min.js', array(), '', true);
		wp_enqueue_script('main', MAXTHEMES_URI_ASSET . 'assets/js/main.js', array(), '', true);
		wp_enqueue_script('carousel', MAXTHEMES_URI_ASSET . 'assets/owlcarousel/js/owl.carousel.min.js', array(), '', true);
		wp_enqueue_script('kai', MAXTHEMES_URI_ASSET . 'assets/js/kai.js', array(), '', true);
	}

}