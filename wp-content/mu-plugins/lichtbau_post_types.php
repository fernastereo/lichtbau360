<?php 
function lichtbau360_post_types() {
  register_post_type('proyecto', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'proyectos'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Proyectos',
      'add_new_item' => 'Nuevo Proyecto',
      'edit_item' => 'Editar Proyecto',
      'all_items' => 'Todos los Proyectos',
      'singular_name' => 'Proyecto'
    ),
    'menu_icon' => 'dashicons-building',
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category')
  ));

  register_post_type('propiedad', array(
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'propiedades'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Propiedades',
      'add_new_item' => 'Nueva Propiedad',
      'edit_item' => 'Editar Propiedad',
      'all_items' => 'Todos las Propiedades',
      'singular_name' => 'Propiedad'
    ),
    'menu_icon' => 'dashicons-admin-home',
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category')
  ));

}
add_action('init', 'lichtbau360_post_types');
?>