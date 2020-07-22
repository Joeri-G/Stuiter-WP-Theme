<?php
define("dir", get_template_directory_uri());

// add js, css and etc.
function add_theme_files() {
  // JS
  wp_enqueue_script('stuiter_master_js', dir.'/js/stuiter_master.js', [], '1.0', true);
  // Other
  wp_enqueue_style('dashicons');
  // CSS
  wp_enqueue_style('stuiter_theme_css', dir.'/css/stuiter_theme.css', [], '1.3', 'all');
  wp_enqueue_style('stuiter_post_css', dir.'/css/stuiter_post.css', [], '1.1', 'all');
  wp_enqueue_style('stuiter_social_css', dir.'/css/stuiter_social.css', [], '1.2', 'all');
  wp_enqueue_style('stuiter_blockeditor_formatting_css', dir.'/css/stuiter_blockeditor_formatting.css', [], '1.0', 'all');
}

// add site logo icon
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 184,
 'width'       => 'auto',
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action('wp_enqueue_scripts', 'add_theme_files');

add_theme_support('menus');

register_nav_menus([
  'nav-bar-top' => __('nav-bar-top', 'theme'),
  'nav-bar-bottom' => __('nav-bar-bottom', 'theme'),
  'side-menu' => __('side-menu', 'theme'),
  'social-links' => __('social-links', 'theme')
]);

// add logo into page
function placeLogo() {
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  if ( has_custom_logo() ) {
    echo '<a href="'.esc_url(get_home_url()).'" rel="home"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="logo"></a>';
  } else {
          echo '<h1 class="logo">'. get_bloginfo( 'name' ) .'</h1>';
  }
}
