<?php
/*
 * Maxthemes function loader
 *
 * @author: 
 */
if (!defined('MAXTHEMES_VER')):
    define('MAXTHEMES_VER', '1.0.0');
endif;
if (!defined('MAXTHEMES_DIR')):
    define('MAXTHEMES_DIR', dirname(__FILE__));
endif;
if (!defined('MAXTHEMES_PATH')):
    define('MAXTHEMES_PATH', __FILE__);
endif;
if (!defined('MAXTHEMES_URI')):
    define('MAXTHEMES_URI', get_template_directory_uri()); //get url theme active
endif;
if (!defined('MAXTHEMES_URI_ASSET')):
    define('MAXTHEMES_URI_ASSET', get_stylesheet_directory_uri().
        '/'); //get url folder
endif;
if (!defined('MAXTHEMES_URI')):
    define('MAXTHEMES_URI', MAXTHEMES_URI); //get url folder
endif;
if (!defined('TIME_ZONE')):
    define('TIME_ZONE', 'Asia/Ho_Chi_Minh');
endif;
if (!defined('MAXTHEMES_LAN')):
    define('MAXTHEMES_LAN', get_locale());
endif;
if (!defined('MAXTHEMES_PREFIX')):
    define('MAXTHEMES_PREFIX', 'mt_prefix_');
endif;

require_once 'maxthemes/bootstrap.php';
use max_themes\components\init;
new init();

//require_once 'polylang-slug.php';
/**
 * Function
 */

/**
 * the excert max char
 * @param type $charlength
 */

/**
 * Max lenght Text
 */
/*
//add excerpt in page */
add_action('init', 'my_add_excerpts_to_pages');

function my_add_excerpts_to_pages() {
    add_post_type_support('page', 'excerpt');
}

//lenght excerpt
function custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function max_text_charlength($text, $charlength) {
    $charlength++;
    if (mb_strlen($text) > $charlength) {
        $subex = mb_substr($text, 0, $charlength - 5);
        $exwords = explode(' ', $subex);
        $excut = -(mb_strlen($exwords[count($exwords) - 1]));
        if ($excut < 0) {
            echo mb_substr($subex, 0, $excut);
        } else {
            echo $subex;
        }

        echo '...';

    } else {
        echo $text;
    }
}

/*****************************************/

// remove x-pingback HTTP header
add_filter('xmlrpc_enabled', '__return_false');
/*
	# START XML RPC BLOCKING
	<Files xmlrpc.php>
	Order Deny,Allow
	Deny from all
	</Files>
	# FINISH XML RPC BLOCKING
*/

// Go setting TURN OFF PINGBACK AGAIN
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });

// disable pingbacks
    add_filter('xmlrpc_methods', function($methods) {
        unset($methods['pingback.ping']);
        return $methods;
    });

//add_filter( 'auto_update_translation', '__return_false' );

//quality image
/*
add_filter( 'wp_generate_attachment_metadata', function( $metadata, $attachment_id ) 
{
	$file = get_attached_file( $attachment_id );
	$type = get_post_mime_type( $attachment_id );

// Target jpeg images
	if( in_array( $type, [ 'image/jpg', 'image/jpeg' ] ) )
	{
	// Check for a valid image editor
		$editor = wp_get_image_editor( $file );
		if( ! is_wp_error( $editor ) )
		{
		// Set the new image quality
			$result = $editor->set_quality( 95 );

		// Re-save the original image file
			if( ! is_wp_error( $result ) )
				$editor->save( $file );
		}
	}   
	return $metadata;
}, 10, 2 );
*/
//remove attr width height image upload
add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html) {
    $server = $_SERVER['SERVER_NAME'];
    $html = preg_replace(array('/(width|height)="\d*"\s/', '/http:\/\/'.$server.
        '/'), "", $html);
    //$html = preg_replace( array('/ class="(.*)"/'), 'class="aligncenter"', $html );
    //$html = '<p class="text-center">'.$html.'</p>';
    return $html;
}

/*
	add_filter('default_content', 'mgid_content_default');
	function mgid_content_default($content)
	{
	$content = '<iframe class="no-margin" src="" height="180" width="320"></iframe>
	<iframe class="no-margin" src="" height="800" width="320"></iframe>';
	return $content;
}*/

function remove_jquery_migrate( & $scripts) {
    if (!is_admin()) {
        //$scripts->remove( 'jquery');
        $scripts -> remove('wp-embed');
        //$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
    }
}
add_filter('wp_default_scripts', 'remove_jquery_migrate');

//* Clean WordPress header
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//
/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type) {
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

        $urls = array_diff($urls, array($emoji_svg_url));
    }

    return $urls;
}

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
    echo '<style>
    .update-nag, .notice.notice-error.yoast-notice-error, .yoast-notice-error {
        display: none !important;
    }
    </style>';
}

// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
//
add_filter('wp_title', 'tmt_title_home');

function tmt_title_home($title) {
    if (empty($title) && (is_home() || is_front_page())) {
        $title = get_bloginfo('name');
    }
    return $title;
}
//
function max_js() {
    global $wp_query;
    $args = array(
        'url' => admin_url('admin-ajax.php'),
        'query' => $wp_query -> query,
    );
    wp_enqueue_script('main', get_stylesheet_directory_uri().
        '/assets/js/main.js', array('jquery'), '', true);
    //wp_localize_script( 'main', 'main', $args );
}
add_action('wp_enqueue_scripts', 'max_js');

function single_tax_slug() {
    $term = get_queried_object();

    if (!$term)
        return;

    if (is_category()) {
        $term_slug = $term->name;
    }
    elseif(is_tag()) {
        $term_slug = $term->name;
    }
    elseif(is_tax()) {
        $term_slug = $term->name;
    } else {
        echo get_the_title();
    }

    return $term_slug;
}

// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
    $post_types = get_post_types();
    foreach($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'df_disable_comments_post_types_support');
// Close comments on the front-end
function df_disable_comments_status() {
    return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);
// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
// Remove comments page in menu
function df_disable_comments_admin_menu() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');
// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');
// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'df_disable_comments_admin_bar');
//date_default_timezone_set('Asia/Ho_Chi_Minh');
add_filter( 'emoji_svg_url', '__return_false' );
//
class menu_Nav_Walker extends Walker_Nav_Menu {
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id' => 'db_id'
    );
    public function start_lvl( & $output, $depth = 0, $args = array()) {
        $indent  = str_repeat("\t", $depth);
        $output .= "<div class=\"popup\">";
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
}
//
class menu_Nav_Walker_XS extends Walker_Nav_Menu {
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id' => 'db_id'
    );
    public function start_lvl( & $output, $depth = 0, $args = array()) {
        $indent  = str_repeat("\t", $depth);
        //$output .= "<span class=\"fa fa-caret-down\"></span>";
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
}
//

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)) {
    $first_img = "/images/default.jpg";
}
return $first_img;
}
//
function theme_slug_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
//
function formatMoney($number, $fractional=false) {  
    if ($fractional) {  
        $number = sprintf('%.2f', $number);  
    }  
    while (true) {  
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1.$2', $number);  
        if ($replaced != $number) {  
            $number = $replaced;  
        } else {  
            break;  
        }  
    }  
    return $number;  
}
//
// function bbit_che_do_bao_tri() {
//     if (!current_user_can('edit_themes') || !is_user_logged_in()) {
//         wp_die('Trang web tạm thời đang được bảo trì. Xin vui lòng quay trở lại sau!');
//     }
// }
// add_action('get_header', 'bbit_che_do_bao_tri');

