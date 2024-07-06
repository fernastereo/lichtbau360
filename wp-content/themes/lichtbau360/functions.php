<?php 
require get_template_directory() . '/helpers/helpers.php';

function lichtbau360_files() {
  wp_enqueue_style('custom-google-font', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  wp_enqueue_style('lichtbau360_const_values', get_theme_file_uri('/css/constvalues.css'));
  wp_enqueue_style('lichtbau360_main_styles', get_theme_file_uri('/css/index.css'));
  wp_enqueue_style('lichtbau360_header_styles', get_theme_file_uri('/css/header.css'));
  wp_enqueue_style('lichtbau360_footer_styles', get_theme_file_uri('/css/footer.css'));
  wp_enqueue_style('lichtbau360_language_switcher', get_theme_file_uri('/css/language_switcher.css'));
  wp_enqueue_style('lichtbau360_slider_styles', get_theme_file_uri('/css/slider.css'));
  wp_enqueue_style('lichtbau360_hero_styles', get_theme_file_uri('/css/hero.css'));
  wp_enqueue_style('lichtbau360_servicios_styles', get_theme_file_uri('/css/servicios.css'));
  wp_enqueue_style('lichtbau360_contacto_styles', get_theme_file_uri('/css/contacto.css'));
  wp_enqueue_style('lichtbau360_nosotros_styles', get_theme_file_uri('/css/nosotros.css'));

  wp_enqueue_script('lichtbau360_menu_js', get_theme_file_uri('/build/menu.js'), NULL, '1.0', true);
  wp_enqueue_script('lichtbau360_language_switcher_js', get_theme_file_uri('/build/language_switcher.js'), NULL, '1.0', true);
  wp_enqueue_script('lichtbau360_slider_js', get_theme_file_uri('/build/slider.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('lichtbau360_servicios_js', get_theme_file_uri('/build/servicios.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lichtbau360_files');

function lichtbau360_features(){
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerMenuLocation', 'Footer Menu Location');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('projectThumbnail', 276, 308, true);
  add_image_size('propertyThumbnail', 135, 148, true);
  add_image_size('nosotrosGallery_sm', 382, 538, true);
  add_image_size('nosotrosGallery_lg', 382, 400, true);
  add_image_size('filosofiaCard', 276, 216, true);
  add_image_size('colaboradorCard', 208, 208, true);
  add_image_size('serviciosSlide', 688, 688, true);
}

add_action('after_setup_theme', 'lichtbau360_features');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

?>