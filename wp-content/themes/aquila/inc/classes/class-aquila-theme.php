<?php

/**
 * Adds all basic functionality of the theme
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks(){

        // actions
        add_action('after_setup_theme', [$this,'theme_setup' ]);
        add_action('init', [$this,'register_my_menus']);

        // filters
    }

    public function theme_setup(){

        add_theme_support('title-tag');

        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 480,
            'width' => 720,
            'flex-height' => true,
            'flex-width' => true,
        ]);

        add_theme_support('custom-background', [
            'default-color' => '000000',
            'default-image' => get_template_directory_uri() . '/images/background.jpg',
        ]);

        add_theme_support('post-thumbnails');

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
        // to hook tinyMCE stylesheet
        add_editor_style();

        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');

    }
    function register_my_menus(){
        register_nav_menus(
            [
                'header-menu' => __( 'Header Menu' ),
                'extra-menu' => __( 'Extra Menu' )
            ]
        );
    }
}
