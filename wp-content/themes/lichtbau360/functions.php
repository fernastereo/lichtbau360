<?php 

function lichtbau360_files() {
  wp_enqueue_style('custom-google-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  wp_enqueue_style('lichtbau360_const_values', get_theme_file_uri('/css/constvalues.css'));
  wp_enqueue_style('lichtbau360_main_styles', get_theme_file_uri('/css/index.css'));
  wp_enqueue_style('lichtbau360_header_styles', get_theme_file_uri('/css/header.css'));
  wp_enqueue_style('lichtbau360_footer_styles', get_theme_file_uri('/css/footer.css'));
  wp_enqueue_script('lichtbau360_menu_js', get_theme_file_uri('/build/menu.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'lichtbau360_files');
?>