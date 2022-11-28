<?php
namespace max_themes\components\backend;


class posts
{
	public function __construct()
	{
		// add_action('init', array($this, 'dich_vu_post'));
		// add_action('init', array($this, 'loai_phong_post'));
		// add_action('init', array($this, 'khuyen_mai_post'));
		// add_action('init', array($this, 'store_post'));
		// add_action('init', array($this, 'create_taxonomy_store'), 0);

		
		// add_action('init', array($this, 'nx_post'));
		// add_action('init', array($this, 'product_post'));
		//add_action('init', array($this, 'create_taxonomy_product'), 0);
	}
	public function product_post() {
		$label = array(
			'name' => 'Sản phẩm',
			'singular_name' => 'Sản phẩm'
		);

		$args = array(
			'labels' => $label, //Gọi các label trong biến $label ở trên
			'description' => '', //Mô tả của post type
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
			), //Các tính năng được hỗ trợ trong post type
			'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
			'public' => true, //Kích hoạt post type
			'show_ui' => true, //Hiển thị khung quản trị như Post/Page
			'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
			'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
			'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
			//'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
			//'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
			'can_export' => true, //Có thể export nội dung bằng Tools -> Export
			'has_archive' => false, //Cho phép lưu trữ (month, date, year)
			'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
			'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
			'capability_type' => 'post' //
		);

		register_post_type('san-pham', $args);
			//Tạo post type với slug tên là gao và các tham số trong biến $args ở trên
	}
	public function create_taxonomy_product() {
			/* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
			*/
			$labels = array(
				'name' => __('Danh mục sản phẩm'),
				'singular' => 'danh-muc',
				'menu_name' => 'Danh mục sản phẩm'
			);
			
			/* Biến $args khai báo các tham số trong custom taxonomy cần tạo
			*/
			$args = array(
				'labels' => $labels,
				'hierarchical' => true,
				'public' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud' => true,
				'query_var' => true,
				'rewrite' => array(
					'slug' => 'danh-muc',
					'with_front' => false,
					'hierarchical' => true
				),
			);
			
			/* Hàm register_taxonomy để khởi tạo taxonomy
			*/
			register_taxonomy('danh-muc', array('san-pham'), $args);
		}
		/**/
		public function nx_post() {
			$label = array(
				'name' => 'Nhận xét',
				'singular_name' => 'Nhận xét'
			);

			$args = array(
			'labels' => $label, //Gọi các label trong biến $label ở trên
			'description' => '', //Mô tả của post type
			'supports' => array(
				'title',
				//'editor',
				'excerpt',
				'thumbnail',
			), //Các tính năng được hỗ trợ trong post type
			'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
			'public' => true, //Kích hoạt post type
			'show_ui' => true, //Hiển thị khung quản trị như Post/Page
			'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
			'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
			'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
			//'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
			//'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
			'can_export' => true, //Có thể export nội dung bằng Tools -> Export
			'has_archive' => false, //Cho phép lưu trữ (month, date, year)
			'exclude_from_search' => true, //Loại bỏ khỏi kết quả tìm kiếm
			'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
			'capability_type' => 'post' //
		);

			register_post_type('nx', $args);
			//Tạo post type với slug tên là gao và các tham số trong biến $args ở trên
		}
		public function dich_vu_post() {
			$label = array(
				'name' => 'Dịch vụ',
				'singular_name' => 'Service'
			);

			$args = array(
			'labels' => $label, //Gọi các label trong biến $label ở trên
			'description' => '', //Mô tả của post type
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
			), //Các tính năng được hỗ trợ trong post type
			'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
			'public' => true, //Kích hoạt post type
			'show_ui' => true, //Hiển thị khung quản trị như Post/Page
			'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
			'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
			'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
			//'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
			//'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
			'can_export' => true, //Có thể export nội dung bằng Tools -> Export
			'has_archive' => false, //Cho phép lưu trữ (month, date, year)
			'exclude_from_search' => true, //Loại bỏ khỏi kết quả tìm kiếm
			'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
			'capability_type' => 'post' //
		);

			register_post_type('dich-vu', $args);
			//Tạo post type với slug tên là gao và các tham số trong biến $args ở trên
		}
		public function loai_phong_post() {
			$label = array(
				'name' => 'Loại Phòng',
				'singular_name' => 'Loại Phòng'
			);

			$args = array(
			'labels' => $label, //Gọi các label trong biến $label ở trên
			'description' => '', //Mô tả của post type
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
			), //Các tính năng được hỗ trợ trong post type
			'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
			'public' => true, //Kích hoạt post type
			'show_ui' => true, //Hiển thị khung quản trị như Post/Page
			'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
			'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
			'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
			//'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
			//'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
			'can_export' => true, //Có thể export nội dung bằng Tools -> Export
			'has_archive' => false, //Cho phép lưu trữ (month, date, year)
			'exclude_from_search' => true, //Loại bỏ khỏi kết quả tìm kiếm
			'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
			'capability_type' => 'post' //
		);

			register_post_type('loai-phong', $args);
			//Tạo post type với slug tên là gao và các tham số trong biến $args ở trên
		}
		public function khuyen_mai_post() {
			$label = array(
				'name' => 'Khuyến mãi',
				'singular_name' => 'Khuyến mãi'
			);

			$args = array(
			'labels' => $label, //Gọi các label trong biến $label ở trên
			'description' => '', //Mô tả của post type
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
			), //Các tính năng được hỗ trợ trong post type
			'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
			'public' => true, //Kích hoạt post type
			'show_ui' => true, //Hiển thị khung quản trị như Post/Page
			'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
			'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
			'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
			//'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
			//'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
			'can_export' => true, //Có thể export nội dung bằng Tools -> Export
			'has_archive' => false, //Cho phép lưu trữ (month, date, year)
			'exclude_from_search' => true, //Loại bỏ khỏi kết quả tìm kiếm
			'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
			'capability_type' => 'post' //
		);

			register_post_type('khuyen-mai', $args);
			//Tạo post type với slug tên là gao và các tham số trong biến $args ở trên
		}
		
		
		
		/**/
	}