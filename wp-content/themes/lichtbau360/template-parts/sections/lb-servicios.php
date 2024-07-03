<?php 
$parametro1 = isset($args['parametro1']) ? 'pilars--' . $args['parametro1'] : '';
$parametro2 = isset($args['parametro2']) ? 'pilars--' . $args['parametro2'] : '';

$servicios = get_field('servicios');

?>
<section id="servicios" class="servicios">
  <h3 class="servicios-sub-header">Conoce nuestros</h2>
  <h2 class="servicios-header">Servicios</h2>
  <div class="servicios--slider">
    <ul class="servicios-pagi">
      <li id="juridica" class='servicios-pagi__elem' onclick="showJuridica()">
        <?= servicios_icon('juridica') ?>
      </li>
      <li id="proyectos" class='servicios-pagi__elem' onclick="showProyectos()">
        <?= servicios_icon('proyectos') ?>
      </li>
      <li id="inmobiliaria" class='servicios-pagi__elem' onclick="showInmobiliaria()">
        <?= servicios_icon('inmobiliaria') ?>
      </li>
    </ul>
    <div class="servicios--slides">
      <div class="servicios--slide juridica">
        <h2 class="servicios__title"><?= $servicios['servicio_1']['servicio_principal'] ?></h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="proteccion" class="active"><?= $servicios['servicio_1']['sub_servicio_1']['titulo'] ?></a></li>
              <li><a class="tab-link" href="#" data-menu="tramites"><?= $servicios['servicio_1']['sub_servicio_2']['titulo'] ?></a></li>
              <li><a class="tab-link" href="#" data-menu="licitaciones"><?= $servicios['servicio_1']['sub_servicio_3']['titulo'] ?></a></li>
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--proteccion active">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_1']['sub_servicio_1']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_1']['sub_servicio_1']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_1']['sub_servicio_1']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_1']['sub_servicio_1']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_1']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_1']['sub_servicio_1']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_1']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_1']['sub_servicio_1']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_1']['texto_subtitulo_3'] ?></p>
                  <div class="button-container">
                    <a href="/#contacto" class="slide__text-link">Conoce Más</a>
                  </div>
                  <div class="image-container">
                    <img class="image--body-2" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal-2.jpg" alt="Proteccion Legal">
                  </div>
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--tramites">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_1']['sub_servicio_2']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_1']['sub_servicio_2']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_1']['sub_servicio_2']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_1']['sub_servicio_2']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_2']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_1']['sub_servicio_2']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_2']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_1']['sub_servicio_2']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_2']['texto_subtitulo_3'] ?></p>
                  <div class="button-container">
                    <a href="/#contacto" class="slide__text-link">Conoce Más</a>
                  </div>
                  <div class="image-container">
                    <img class="image--body-2" src="<?php echo get_template_directory_uri() ?>/images/tramites-2.jpg" alt="Proteccion Legal">
                  </div>
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--licitaciones">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_1']['sub_servicio_3']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/licitaciones.jpg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_1']['sub_servicio_3']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_1']['sub_servicio_3']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_1']['sub_servicio_3']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_3']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_1']['sub_servicio_3']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_3']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_1']['sub_servicio_3']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_1']['sub_servicio_3']['texto_subtitulo_3'] ?></p>
                  <div class="button-container">
                    <a href="/#contacto" class="slide__text-link">Conoce Más</a>
                  </div>
                  <div class="image-container">
                    <img class="image--body-2" src="<?php echo get_template_directory_uri() ?>/images/licitaciones-2.jpg" alt="Proteccion Legal">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="servicios--slide proyectos">
        <h2 class="servicios__title"><?= $servicios['servicio_2']['servicio_principal'] ?></h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="obra-civil" class="active"><?= $servicios['servicio_2']['sub_servicio_1']['titulo'] ?></a></li>
              <li><a class="tab-link" href="#" data-menu="acabados"><?= $servicios['servicio_2']['sub_servicio_2']['titulo'] ?></a></li>
              <li><a class="tab-link" href="#" data-menu="diseno"><?= $servicios['servicio_2']['sub_servicio_3']['titulo'] ?></a></li>
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--obra-civil active">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_2']['sub_servicio_1']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_2']['sub_servicio_1']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_2']['sub_servicio_1']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_2']['sub_servicio_1']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_1']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_2']['sub_servicio_1']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_1']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_2']['sub_servicio_1']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_1']['texto_subtitulo_3'] ?></p>
                  <div class="proyectos__list--container">
                    <h2>Construimos lo que necesites, nos adaptamos a tus necesidades</h2>
                    <hr style="margin: 0 3rem;">
                    <div class="proyectos--realizados">
                      <h3>Proyectos Realizados</h3>
                      <div class="proyectos--realizados__slider">
                        <?php
                          $proyectosObraNueva = new WP_Query(array(
                            'post_type' => 'proyecto',
                            'posts_per_page' => 5,
                            'meta_key' => 'executed',
                            'orderby' => 'meta_value_num',
                            'meta_query' => array(
                              array(
                                'key' => 'project_type',
                                'compare' => '=',
                                'value' => 'ARQUITECTURA'
                              )
                            )
                          ));
                          
                          while ($proyectosObraNueva->have_posts()){
                            $proyectosObraNueva->the_post(); ?>
                            <div class="proyectos--realizados__card">
                              <?php //the_post_thumbnail('projectThumbnail'); ?>
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
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--acabados">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_2']['sub_servicio_2']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_2']['sub_servicio_2']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_2']['sub_servicio_2']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_2']['sub_servicio_2']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_2']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_2']['sub_servicio_2']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_2']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_2']['sub_servicio_2']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_2']['texto_subtitulo_3'] ?></p>
                  <div class="proyectos__list--container">
                    <h2>Construimos lo que necesites, nos adaptamos a tus necesidades</h2>
                    <hr style="margin: 0 3rem;">
                    <div class="proyectos--realizados">
                      <h3>Proyectos Realizados</h3>
                      <div class="proyectos--realizados__slider">
                        <?php
                          $proyectosObraNueva = new WP_Query(array(
                            'post_type' => 'proyecto',
                            'posts_per_page' => 5,
                            'meta_key' => 'executed',
                            'orderby' => 'meta_value_num',
                            'meta_query' => array(
                              array(
                                'key' => 'project_type',
                                'compare' => '=',
                                'value' => 'CONSTRUCCION'
                              )
                            )
                          ));
                          
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
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--diseno">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_2']['sub_servicio_3']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_2']['sub_servicio_3']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_2']['sub_servicio_3']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_2']['sub_servicio_3']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_3']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_2']['sub_servicio_3']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_3']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_2']['sub_servicio_3']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_2']['sub_servicio_3']['texto_subtitulo_3'] ?></p>
                  <div class="proyectos__list--container">
                    <h2>Construimos lo que necesites, nos adaptamos a tus necesidades</h2>
                    <hr style="margin: 0 3rem;">
                    <div class="proyectos--realizados">
                      <h3>Proyectos Realizados</h3>
                      <div class="proyectos--realizados__slider">
                        <?php
                          $proyectosObraNueva = new WP_Query(array(
                            'post_type' => 'proyecto',
                            'posts_per_page' => 5,
                            'meta_key' => 'executed',
                            'orderby' => 'meta_value_num',
                            'meta_query' => array(
                              array(
                                'key' => 'project_type',
                                'compare' => '=',
                                'value' => 'OBRA CIVIL'
                              )
                            )
                          ));
                          
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
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <div class="servicios--slide inmobiliaria">
        <h2 class="servicios__title"><?= $servicios['servicio_3']['servicio_principal'] ?></h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="venta" class="active"><?= $servicios['servicio_3']['sub_servicio_1']['titulo'] ?></a></li>
              <li><a class="tab-link" href="#" data-menu="arriendo"><?= $servicios['servicio_3']['sub_servicio_2']['titulo'] ?></a></li>
              <li><a class="tab-link" href="#" data-menu="arriendo"><?= $servicios['servicio_3']['sub_servicio_3']['titulo'] ?></a></li>
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--venta active">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_3']['sub_servicio_1']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_3']['sub_servicio_1']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_3']['sub_servicio_1']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_3']['sub_servicio_1']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_1']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_3']['sub_servicio_1']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_1']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_3']['sub_servicio_1']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_1']['texto_subtitulo_3'] ?></p>
                  <div class="proyectos__list--container">
                    <h2>Explora nuestras opciones</h2>
                    <p>Dejanos ayudarte a encontrar tu proximo hogar o maximizar el valor de tu propiedad</p>
                    <hr class="line-break">
                    <div class="propiedades">
                      <div class="propiedades__slider">
                      <?php
                          $propiedades = new WP_Query(array(
                            'post_type' => 'propiedad',
                            'posts_per_page' => 9,
                            // 'meta_key' => 'executed',
                            // 'orderby' => 'meta_value_num',
                            // 'meta_query' => array(
                            //   array(
                            //     'key' => 'project_type',
                            //     'compare' => '=',
                            //     'value' => 'OBRA CIVIL'
                            //   )
                            // )
                          ));
                          
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
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--arriendo">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_3']['sub_servicio_2']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_3']['sub_servicio_2']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_3']['sub_servicio_2']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_3']['sub_servicio_2']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_2']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_3']['sub_servicio_2']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_2']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_3']['sub_servicio_2']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_2']['texto_subtitulo_3'] ?></p>

                  <div class="proyectos__list--container">
                    <h2>Explora nuestras opciones</h2>
                    <p>Dejanos ayudarte a encontrar tu proximo hogar o maximizar el valor de tu propiedad</p>
                    <hr class="line-break">
                    <div class="propiedades">
                      <div class="propiedades__slider">
                      <?php
                          $propiedades = new WP_Query(array(
                            'post_type' => 'propiedad',
                            'posts_per_page' => 9,
                            // 'meta_key' => 'executed',
                            // 'orderby' => 'meta_value_num',
                            // 'meta_query' => array(
                            //   array(
                            //     'key' => 'project_type',
                            //     'compare' => '=',
                            //     'value' => 'OBRA CIVIL'
                            //   )
                            // )
                          ));
                          
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
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--arriendo">
              <h2 class="servicios__text--heading-mobile"><?= $servicios['servicio_3']['sub_servicio_3']['titulo'] ?></h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop"><?= $servicios['servicio_3']['sub_servicio_3']['titulo'] ?></h2>
                    <p><?= $servicios['servicio_3']['sub_servicio_3']['descripcion'] ?></p>
                    <a href="/#contacto" class="slide__text-link">Contáctanos</a>
                  </div>
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                </div>
                <div class="text--body-2">
                  <h3><?= $servicios['servicio_3']['sub_servicio_3']['subtitulo_1'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_3']['texto_subtitulo_1'] ?></p>
                  <h3><?= $servicios['servicio_3']['sub_servicio_3']['subtitulo_2'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_3']['texto_subtitulo_2'] ?></p>
                  <h3><?= $servicios['servicio_3']['sub_servicio_3']['subtitulo_3'] ?></h3>
                  <p><?= $servicios['servicio_3']['sub_servicio_3']['texto_subtitulo_3'] ?></p>

                  <div class="proyectos__list--container">
                    <h2>Explora nuestras opciones</h2>
                    <p>Dejanos ayudarte a encontrar tu proximo hogar o maximizar el valor de tu propiedad</p>
                    <hr class="line-break">
                    <div class="propiedades">
                      <div class="propiedades__slider">
                      <?php
                          $propiedades = new WP_Query(array(
                            'post_type' => 'propiedad',
                            'posts_per_page' => 9,
                            // 'meta_key' => 'executed',
                            // 'orderby' => 'meta_value_num',
                            // 'meta_query' => array(
                            //   array(
                            //     'key' => 'project_type',
                            //     'compare' => '=',
                            //     'value' => 'OBRA CIVIL'
                            //   )
                            // )
                          ));
                          
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>