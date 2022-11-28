<?php
namespace max_themes\components\backend;

	/**
		* Class support
		* @package max_themes\components\backend
	*/
		class support
		{
			public function __construct()
			{
			/**
				* Thêm ảnh đại diện cho bài viết
			*/
				add_theme_support( 'post-thumbnails' );
				$this->add_thumbnail();
				$this->add_widget();
			}

		/**
			* Cắt ảnh image
		*/
			public function add_thumbnail() {
			//set_post_thumbnail_size( 406, 318, array( 'center', 'center' ) );
			//set_post_thumbnail_size( 500, 500, array( 'center', 'center' ) );
			//add_image_size( 'service', 300, 225, array( 'center', 'center' ) );
			//add_image_size( 'service-home', 384, 590, array( 'center', 'center' ) );
			//add_image_size( 'gallery', 300, 300, array( 'center', 'center' ) );
			//add_image_size( 'customer', 150, 150, array( 'center', 'center' ) );
			//add_image_size( 'post', 500, 333, array( 'center', 'center' ) );
			//add_image_size( 'post', 500, 500, array( 'center', 'center' ) );
			//add_image_size( 'introduce', 231,231, array( 'center', 'center' ) );
			//add_image_size( 'news-home-small', 300,210, array( 'center', 'center' ) );
			//add_image_size( 'news', 266,150, array( 'center', 'center' ) );
			}

		/**
			* Đăng ký side_bar nếu
		*/
			public function add_widget() {
				if (function_exists('register_sidebar')) {
					//
					register_sidebar(
						array(
							'name' => 'Footer Box',
							'id' => 'wg-footer-box',
							'before_widget' => '<div id="%1$s" class="widget %2$s">',
							'after_widget' => '</div>',
							'before_title' => '<h4 class="widget-title">',
							'after_title' => '</h4>'
						)
					);
				}
			}
		}