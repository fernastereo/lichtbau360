<?php 

function lichtbau360_files() {
  wp_enqueue_style('custom-google-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  wp_enqueue_style('lichtbau360_const_values', get_theme_file_uri('/css/constvalues.css'));
  wp_enqueue_style('lichtbau360_main_styles', get_theme_file_uri('/css/index.css'));
  wp_enqueue_style('lichtbau360_header_styles', get_theme_file_uri('/css/header.css'));
  wp_enqueue_style('lichtbau360_footer_styles', get_theme_file_uri('/css/footer.css'));
  wp_enqueue_style('lichtbau360_language_switcher', get_theme_file_uri('/css/language_switcher.css'));
  wp_deregister_script('jquery');
  wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.7.1.min.js", array(), '3.7.1' );
  wp_enqueue_script('lichtbau360_menu_js', get_theme_file_uri('/build/menu.js'), NULL, '1.0', true);
  wp_enqueue_script('lichtbau360_language_switcher_js', get_theme_file_uri('/build/language_switcher.js'), NULL, '1.0', true);
  wp_enqueue_script('lichtbau360_slider_js', get_theme_file_uri('/build/slider.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lichtbau360_files');

function lichtbau360_features(){
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'lichtbau360_features');

require get_template_directory() . '/helpers/helpers.php';
?>