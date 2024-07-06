<?php 
  $servicio = isset($args['servicio']) ?  $args['servicio'] : null;
  $slide = isset($args['slide']) ?  $args['slide'] : '';
  $query = isset($args['query']) ?  $args['query'] : [];
?>
<div class="servicios--slide <?= $slide ?>">
  <h2 class="servicios__title"><?= $servicio['servicio_principal'] ?></h2>
  <div class="servicios__content">
    <div class="servicios__content--menu">
      <ul>
        <li><a class="tab-link" href="#" data-menu="<?= slugify($servicio['sub_servicio_1']['titulo']) ?>" class="active"><?= $servicio['sub_servicio_1']['titulo'] ?></a></li>
        <li><a class="tab-link" href="#" data-menu="<?= slugify($servicio['sub_servicio_2']['titulo']) ?>"><?= $servicio['sub_servicio_2']['titulo'] ?></a></li>
        <li><a class="tab-link" href="#" data-menu="<?= slugify($servicio['sub_servicio_3']['titulo']) ?>"><?= $servicio['sub_servicio_3']['titulo'] ?></a></li>
      </ul>
    </div>
    <div class="servicios-content__container">
      <?php for ($i=1; $i <= 3 ; $i++) { ?>     
        <div class="servicio-wrapper servicio-wrapper--<?= slugify($servicio['sub_servicio_' . $i]['titulo']) ?><?= $i === 1 ? ' active' : '' ?>">
          <h2 class="servicio-wrapper--heading-mobile"><?= $servicio['sub_servicio_' . $i]['titulo'] ?></h2>
          <div class="servicio-image__container">
            <img class="servicio-image" src="<?= $servicio['sub_servicio_' . $i]['imagen']['sizes']['serviciosSlide'] ?>" alt="<?= $servicio['sub_servicio_' . $i]['titulo'] ?>">
          </div>
          <div class="servicio-content__container">
            <h2 class="servicio-wrapper--heading-desktop"><?= $servicio['sub_servicio_' . $i]['titulo'] ?></h2>
            <div class="servicio-text__body-1">
              <p><?= $servicio['sub_servicio_' . $i]['descripcion'] ?></p>
              <a href="/#contacto" class="slide__text-link">Contáctanos</a>
            </div>
            <div class="servicio-text__body-2">
              <h3><?= $servicio['sub_servicio_' . $i]['subtitulo_1'] ?></h3>
              <p><?= $servicio['sub_servicio_' . $i]['texto_subtitulo_1'] ?></p>
              <h3><?= $servicio['sub_servicio_' . $i]['subtitulo_2'] ?></h3>
              <p><?= $servicio['sub_servicio_' . $i]['texto_subtitulo_2'] ?></p>
              <h3><?= $servicio['sub_servicio_' . $i]['subtitulo_3'] ?></h3>
              <p><?= $servicio['sub_servicio_' . $i]['texto_subtitulo_3'] ?></p>
              <div class="button-container">
                <a href="/#contacto" class="slide__text-link">Conoce Más</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- ESTA ES LA IMAGEN QUE SE MUESTRA SI NO HAY POST-TYPES DE ESE Servicios -->
      <div class="post-types__container">
        <?php if($slide === 'slide-1'):?>
          <img class="image--body-2" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal-2.jpg" alt="Proteccion Legal">
        <?php elseif($slide === 'slide-2'): ?>
          <div class="proyectos__list--container-slide-2">
            <h2>Construimos lo que necesites, nos adaptamos a tus necesidades</h2>
            <hr style="margin: 0 3rem;">
            <div class="proyectos--realizados">
              <h3>Proyectos Realizados</h3>
              <div class="proyectos--realizados__slider">
                <?php
                  $proyectosObraNueva = new WP_Query($query);
                  
                  while ($proyectosObraNueva->have_posts()){
                    $proyectosObraNueva->the_post(); ?>
                    <div class="proyectos--realizados__card">
                      <img src="<?php the_post_thumbnail_url( 'projectThumbnail' ) ?>" alt="<?php the_title(); ?>">
                      <h4>
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h4>
                      <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                    </div>
                <?php }?>
              </div>
            </div>
          </div>
        <?php elseif($slide === 'slide-3'): ?>
          <div class="proyectos__list--container-slide-3">
            <h2>Explora nuestras opciones</h2>
            <p>Dejanos ayudarte a encontrar tu proximo hogar o maximizar el valor de tu propiedad</p>
            <hr class="line-break">
            <div class="propiedades">
              <div class="propiedades__slider">
              <?php
                  $propiedades = new WP_Query($query);
                  
                  while ($propiedades->have_posts()){
                    $propiedades->the_post(); ?>
                    <div class="propiedades__card">
                      <img src="<?php the_post_thumbnail_url( 'propertyThumbnail' ) ?>" alt="<?php the_title(); ?>">
                      <div class="propiedades__card--details">
                        <h4><a href="#<?php //the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php the_field('ciudad'); ?></p>
                        <p><?php the_field('barrio'); ?></p>
                        <p>$<?php the_field('valor'); ?></p>
                        <div class="button-container">
                          <a class="slide__text-link">Ver Más</a>
                        </div>
                      </div>
                    </div>
                  <?php }?>
              </div>
              <div class="button-container">
                <a class="slide__text-link">Ver Todos</a>
              </div>
            </div>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>
