<?php

namespace max_themes\components\backend;


class menu
{
    public function __construct()
    {
        /** menu chinh **/
        add_theme_support('menus');
        register_nav_menus(
            array(
                'header-menu' => 'Menu chính',
            )

        );
        register_nav_menus(
            array(
                'footer-left' => 'Menu footer left',
            )

        );
        register_nav_menus(
            array(
                'footer-right' => 'Menu footer right',
            )

        );
    }
}