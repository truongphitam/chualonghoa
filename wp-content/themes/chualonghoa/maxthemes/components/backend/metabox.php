<?php
namespace max_themes\components\backend;

class metabox
{
    public function __construct()
    {
        /*
         * Kiểm tra nếu đã cài đặt metabox thì gọi đến hàm sử dụng metabox
         */
        if (!function_exists('rwmb_meta_boxes')) {
            add_filter('rwmb_meta_boxes', array($this, 'init_meta_box'));
        }
    }

    public function init_meta_box()
    {
        $meta_boxes[] = array(
            'title' => __('Nghề nghiệp', 'maxthemes'),
            'post_types' => 'think',

            'fields' => array(
                array(
                    'id' => 'work-client',
                    'name' => __('Nghề nghiệp', 'maxthemes'),
                    'type' => 'text',
                    'std' => 'Công an'
                ),
                array(
                    'id' => 'work-client-en',
                    'name' => __('Nghề nghiệp tiếng anh', 'maxthemes'),
                    'type' => 'text',
                    'std' => ''
                ),
          )

        );
        $meta_boxes[] = array(
            'title' => __('Link video', 'maxthemes'),
            'post_types' => 'library',

            'fields' => array(
                array(
                    'id' => 'link-video',
                    'name' => __('Link video', 'maxthemes'),
                    'type' => 'textarea',
                ),
            )

        );

       return $meta_boxes;
    }
}