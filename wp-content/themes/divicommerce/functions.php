<?php if( file_exists( get_stylesheet_directory().'/jedi-apprentice/jedi-apprentice-import.php' ) && !defined('JEDI_APPRENTICE_PATH') ) {include_once( get_stylesheet_directory().'/jedi-apprentice/jedi-apprentice-import.php' );} ?><?php 

add_action( 'wp_enqueue_scripts', 'divicommerce_assets' ); 

function divicommerce_assets() { 

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/js/dc-custom-scripts.js', array( 'jquery' ), '1.0', true );

} 

// REMOVE PRODUCT SLIDER AND ZOOM

add_action( 'wp', 'dc_remove_zoom_lightbox_theme_support', 99 );
  
function dc_remove_zoom_lightbox_theme_support() { 
   remove_theme_support( 'wc-product-gallery-zoom' );
   remove_theme_support( 'wc-product-gallery-slider' );
}

// CHANGE CROP THUMBNAIL GALLERY IMAGES

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
    return array(
        'width' => 700,
        'height' => 700,
        'crop' => 0,
    );
} );
