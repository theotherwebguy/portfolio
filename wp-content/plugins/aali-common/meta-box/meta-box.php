<?php
/**
 * Plugin Name: Meta Box
 * Plugin URI:  https://metabox.io
 * Description: Create custom meta boxes and custom fields in WordPress.
 * Version:     5.3.3
 * Author:      MetaBox.io
 * Author URI:  https://metabox.io
 * License:     GPL2+
 * Text Domain: meta-box
 * Domain Path: /languages/
 *
 * @package Meta Box
 */

if ( defined( 'ABSPATH' ) && ! defined( 'RWMB_VER' ) ) {
	register_activation_hook( __FILE__, 'rwmb_check_php_version' );

	/**
	 * Display notice for old PHP version.
	 */
	function rwmb_check_php_version() {
		if ( version_compare( phpversion(), '5.3', '<' ) ) {
			die( esc_html__( 'Meta Box requires PHP version 5.3+. Please contact your host to upgrade.', 'meta-box' ) );
		}
	}




	require_once dirname( __FILE__ ) . '/inc/loader.php';
	$rwmb_loader = new RWMB_Loader();
	$rwmb_loader->init();


	add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {

	$prefix = '_cmb_';


  // Open Code


    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Single Select',
                'desc' => 'Select Type Show Single',
                'id'   => $prefix . 'post_select',
                'type'    => 'select',
                'options'   => array(
                    'black'       => 'Dark',
                    'light' => 'Light',
                ),
                'default' => 'Light',

                'placeholder'     => 'Select Single Type',
            ),
        )
    );
    $meta_boxes[] = array(
        'id'         => 'portfolio_setting',
        'title'      => 'Portfolio Setting',
        'pages'      => array('portfolio'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Single Select',
                'desc' => 'Select Type Show Single',
                'id'   => $prefix . 'portfolio_select',
                'type'    => 'select',
                'options'   => array(
                    'black'       => 'Dark',
                    'light' => 'Light',
                ),
                'default' => 'Light',

                'placeholder'     => 'Select Portfolio Type',
            ),
            array(

                'name' => 'Portfolio Social Link',

                'desc' => 'Input Portfolio Social Link',

                'id'   => $prefix . 'portfolio_social_link',

                'type'    => 'text',

            ),
            array(
                'name' => 'Portfolio Social Icon',
                'desc' => 'Show in Portfolio ',
                'id'   => $prefix . 'portfolio_social_icon',
                'type'    => 'file',
            ),
        )
    );
    
    
    

    
// End Code



    return $meta_boxes;
});
}
