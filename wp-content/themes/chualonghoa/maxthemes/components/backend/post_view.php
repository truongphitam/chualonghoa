<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/4/2016
 * Time: 8:59 AM
 */
class postview
{
    function  __construct(){
        add_action('wp_footer','postview_set');
        add_action('wp_footer','postview_get');
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    }
}
function postview_set($postID) {
    $count_key = 'postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//hi?n th? l??ng ??c
function postview_get($postID){
    $count_key = 'postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}


