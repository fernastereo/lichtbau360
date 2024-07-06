<?php 
  $imagenes_intro = get_field('imagenes_intro');
  $contentPilares = get_field('nuestros_pilares');
  $contentFilosofia = get_field('nuestra_filosofia');
  $contentEquipo = get_field('nuestro_equipo');
  $contentMisionVision = get_field('mision_vision');
  $contentFooter = get_field('pie_de_pagina');

  $subTitulo1 = $contentPilares['subtitulo_1'];
  $subTitulo2 = $contentPilares['subtitulo_2'];
  $subTitulo3 = $contentPilares['subtitulo_3'];
  $tituloPilares = $contentPilares['titulo_pilares'];
  $textoPilaresPrincipal = $contentPilares['texto_pilares'];
  $textoPilaresSecundario = $contentPilares['texto_pilares_secundario'];
  $imagenPilares = $contentPilares['imagen_side'];

  $tituloFilosofia = $contentFilosofia['titulo_nuestra_filosofia'];
  $textoFilosofiaPrincipal = $contentFilosofia['texto_nuestra_filosofia'];
  $textoFilosofiaSecundario = $contentFilosofia['texto_nuestra_filosofia_secundario'];
  $tituloFilosofia1 = $contentFilosofia['filosofia_1']['titulo_filosofia_1'];
  $textoFilosofia1 = $contentFilosofia['filosofia_1']['texto_filosofia_1'];
  $imagenFilosofia1 = $contentFilosofia['filosofia_1']['imagen_filosofia_1'];
  $tituloFilosofia2 = $contentFilosofia['filosofia_2']['titulo_filosofia_2'];
  $textoFilosofia2 = $contentFilosofia['filosofia_2']['texto_filosofia_2'];
  $imagenFilosofia2 = $contentFilosofia['filosofia_2']['imagen_filosofia_2'];
  $tituloFilosofia3 = $contentFilosofia['filosofia_3']['titulo_filosofia_3'];
  $textoFilosofia3 = $contentFilosofia['filosofia_3']['texto_filosofia_3'];
  $imagenFilosofia3 = $contentFilosofia['filosofia_3']['imagen_filosofia_3'];

  $tituloEquipo = $contentEquipo['titulo_nuestro_equipo'];
  $textoEquipoPrincipal = $contentEquipo['texto_nuestro_equipo'];
  $textoEquipoSecundario = $contentEquipo['texto_nuestro_equipo_secundario'];

  $mision = $contentMisionVision['mision'];
  $vision = $contentMisionVision['vision'];

  $imagenFooter = $contentFooter['imagen'];
  $textoFooter = $contentFooter['texto'];

  get_header();
  get_template_part('template-parts/components/hero/lb', 'hero') ?>

  <div class="container-nosotros">
    <?php esc_attr(the_content()); ?>
  </div>

  <div class="nosotros-wrapper">
    <div class="nosotros-hero">
      <div class="nosotros-hero__box1" style="background-image: url(<?= $imagenes_intro['imagen_1']['sizes']['nosotrosGallery_1'] ?>);">
      </div>
      <div class="nosotros-hero__box2" style="background-image: url(<?= $imagenes_intro['imagen_2']['sizes']['nosotrosGallery_2'] ?>);">
      </div>
      <div class="nosotros-hero__box3" style="background-image: url(<?= $imagenes_intro['imagen_3']['sizes']['nosotrosGallery_3'] ?>);">
      </div>
      <div class="nosotros-hero__box4" style="background-image: url(<?= $imagenes_intro['imagen_4']['sizes']['nosotrosGallery_4'] ?>);">
      </div>
      <div class="nosotros-hero__box5" style="background-image: url(<?= $imagenes_intro['imagen_5']['sizes']['nosotrosGallery_5'] ?>);">
      </div>
      <div class="nosotros-hero__box6" style="background-image: url(<?= $imagenes_intro['imagen_6']['sizes']['nosotrosGallery_6'] ?>);">
      </div>
    </div>
  </div>

  <div class="pilares-wrapper">
    <div class="pilares-wrapper__content">
      <div class="pilares-wrapper__subheading">
        <h3><?= esc_attr($subTitulo1) ?></h3>
        <h3><?= esc_attr($subTitulo2) ?></h3>
        <h3><?= esc_attr($subTitulo3) ?></h3>
      </div>
      <?php get_template_part('template-parts/components/pilars/lb', 'pilars', ['container_class_modifier' => 'desktop']); ?>
      <?php get_template_part('template-parts/components/pilars/lb', 'pilars', ['container_class_modifier' => 'mobile']); ?>
      <div class="pilares-wrapper__description">
        <h2><?= esc_attr($tituloPilares) ?></h2>
        <p><?= esc_attr($textoPilaresPrincipal) ?></p>
        <p><?= $textoPilaresSecundario ?></p>
      </div>
    </div>
    <div class="pilares-wrapper__image">
      <img src="<?= $imagenPilares['sizes']['large'] ?>" alt="">
    </div>
  </div>

  <div class="filosofia-wrapper">
    <h2><?= esc_attr($tituloFilosofia) ?></h2>
    <div class="filosofia-wrapper__details">
      <p><?= esc_attr($textoFilosofiaPrincipal) ?></p>
      <p><?= $textoFilosofiaSecundario ?></p>
      <div class="filosofia-wrapper__body">
        <div class="filosofia-wrapper__card">
          <img src="<?= $imagenFilosofia1['sizes']['filosofiaCard'] ?>" alt="">
          <h3><?= esc_attr($tituloFilosofia1) ?></h3>
          <p><?= esc_attr($textoFilosofia1) ?></p>
        </div>
        <div class="filosofia-wrapper__card">
          <img src="<?= $imagenFilosofia2['sizes']['filosofiaCard'] ?>" alt="">
          <h3><?= esc_attr($tituloFilosofia2) ?></h3>
          <p><?= esc_attr($textoFilosofia2) ?></p>
        </div>
        <div class="filosofia-wrapper__card">
          <img src="<?= $imagenFilosofia3['sizes']['filosofiaCard'] ?>" alt="">
          <h3><?= esc_attr($tituloFilosofia3) ?></h3>
          <p><?= esc_attr($textoFilosofia3) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="banner-wrapper">
    <img src="<?= $imagenPilares['sizes']['large'] ?>" alt="">
    <h2>Experimenta un Proceso Amigable</h2>
    <a href="/#servicios">Descubre nuestros Servicios</a>
  </div>

  <div class="equipo-wrapper">
    <h2><?= esc_attr($tituloEquipo) ?></h2>
    <div class="equipo-wrapper__details">
      <p><?= esc_attr($textoEquipoPrincipal) ?></p>
      <p><?= $textoEquipoSecundario ?></p>
      <div class="equipo-wrapper__body">
        <?php 
          $colaboradores = new WP_Query(array(
            'post_type' => 'colaborador',
            'posts_per_page' => 6,
            'meta_key' => 'orden',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'mostrar_en_pagina',
                'compare' => '=',
                'value' => true
              )
            )
          ));
          
          while ($colaboradores->have_posts()){
            $colaboradores->the_post(); ?>

            <div class="equipo-wrapper__card">
              <img src="<?= the_post_thumbnail_url( 'colabboradorCard' ) ?>" alt="<?php the_title(); ?>">
              <div class="card-details">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('cargo') ?></p>
                <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
              </div>
            </div>
        <?php }?>
      </div>
    </div>
  </div>
  <style>
    @media (max-width: 767px) {
      .mision-vision__background-image {
        background-image: none;
      }
    }
    @media (min-width: 768px) {
      .mision-vision__background-image {
        background-image: url('<?= esc_url($imagenPilares['sizes']['large']); ?>');
      }
    }
  </style>
  <div class="mision-vision__background-image"></div>
  <div class="mision-vision-wrapper">
    <div class="mision-vision-container">
      <?php get_template_part('template-parts/components/pilars/lb', 'pilars', ['container_class_modifier' => 'desktop']); ?>
      <div class="mision-vision-body">
        <div class="mision-vision-wrapper__mision">
          <h2>Misión</h2>
          <p><?= $mision ?></p>
        </div>
        <div class="mision-vision__mobile-image">
          <img src="<?= esc_url($imagenPilares['sizes']['medium']); ?>" alt="">
          <?php get_template_part('template-parts/components/pilars/lb', 'pilars', ['container_class_modifier' => 'mobile']); ?>
        </div>
        <div class="mision-vision-wrapper__vision">
          <h2>Visión</h2>
          <p><?= $vision ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-image-wrapper" >
    <img src="<?= esc_url($imagenFooter['sizes']['large']); ?>" alt="">
    <div class="footer-image__content">
      <h2><?= $textoFooter ?></h2>
      <a href="/#contacto">Contáctanos</a>
    </div>
  </div>

<?php get_footer();
?>

