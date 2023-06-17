<?php
add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css' );
    wp_enqueue_style( 'fonts',  'https://fonts.googleapis.com/css?family=Roboto:400,700' );
    wp_enqueue_style( 'cdnjs', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );

	wp_enqueue_script( 'show-more-button', get_template_directory_uri() . '/assets/js/show-more-button.js', 'null', true );
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'upload_allow_types' );

function upload_allow_types( $mimes ) {
    // allow new types
    $mimes['svg']  = 'image/svg+xml';
    $mimes['doc']  = 'application/msword';
    $mimes['woff'] = 'font/woff';
    $mimes['psd']  = 'image/vnd.adobe.photoshop';
    $mimes['djv']  = 'image/vnd.djvu';
    $mimes['djvu'] = 'image/vnd.djvu';

    // disable existing
    // unset( $mimes['mp4a'] );

    return $mimes;
}

?>