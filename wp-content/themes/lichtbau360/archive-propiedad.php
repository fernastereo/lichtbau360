<?php get_header();
?>

<div class="container-archive-propiedades">
  <h1>Propiedades</h1>
  <div class="equipo-wrapper__body">
    <?php 
      $propiedades = new WP_Query(array(
        'post_type' => 'propiedad',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
      ));
      
      while ($propiedades->have_posts()){
        $propiedades->the_post(); ?>

        <div class="propiedades__card">
          <img src="<?php the_post_thumbnail_url( 'propertyThumbnail' ) ?>" alt="<?php the_title(); ?>">
          <div class="propiedades__card--details">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php the_field('ciudad'); ?></p>
            <p><?php the_field('barrio'); ?></p>
            <p><?php echo '$' . number_format(get_post_meta(get_the_ID(), 'valor', true), 0); ?></p>
            <div class="button-container">
              <a href="<?php the_permalink(); ?>" class="slide__text-link">Ver Más</a>
            </div>
          </div>
        </div>
    <?php }?>
  </div>
</div>
<?php get_footer(); ?>
