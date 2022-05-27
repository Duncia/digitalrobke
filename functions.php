<?php
//Theme setup
function webwizards_setup(){
    //Title in the tab of every page
    add_theme_support('title-tag');
    //Enabling thumbnails
    add_theme_support('post-thumbnails');
    //Support for Woocommerce
    add_theme_support('woocommerce');
    //Load translations in languages folder
    load_theme_textdomain( 'digitalrobke', get_template_directory() . '/languages' );
    //Register menu
    register_nav_menu('header-meniu', 'Header');
    register_nav_menu('footer-meniu', 'Footer');
    register_nav_menu('header-language-switcher', 'Header Language Switcher');
}
add_action('after_setup_theme', 'webwizards_setup');

//Add JS/CSS files
function webwizards_js_css_files() {
    wp_enqueue_style('webwizards_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_script('index', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0.0', true);
    if(is_page_template('contact-form-main.php')){
      wp_enqueue_script('contact-form', get_theme_file_uri('assets/contact-form-js/contact-form.js'), array('jquery'), '1.0.0', true);
    };
  }
add_action('wp_enqueue_scripts', 'webwizards_js_css_files');

//Remove dash from page title
add_filter( 'document_title_separator', 'document_title_separator' );
function document_title_separator( $sep ) {
    $sep = "|";
    return $sep;
}

//Upload SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');

//Woocommerce changes
function remove_product_image_link( $html, $post_id ) {
  return preg_replace( "!<(a|/a).*?>!", '', $html );
}
add_filter( 'woocommerce_single_product_image_thumbnail_html', 'remove_product_image_link', 10, 2 );