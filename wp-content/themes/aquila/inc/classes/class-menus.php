<?php


/**
 * Adds menu functionality of the theme
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus {
    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        // actions
        add_action('init', [$this, 'register_my_menus']);

        // filters
    }

    function register_my_menus()
    {
        register_nav_menus(
            [
                'header-menu' => __('Header Menu'),
                'extra-menu' => __('Extra Menu')
            ]
        );
    }
}
