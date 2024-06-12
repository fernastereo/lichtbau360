<?php 
$parametro1 = isset($args['parametro1']) ? 'pilars--' . $args['parametro1'] : '';
$parametro2 = isset($args['parametro2']) ? 'pilars--' . $args['parametro2'] : '';

?>
<section class="servicios">
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
        <h2 class="servicios__title">Asesorias Juridicas</h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="proteccion" class="active">Proteccion Legal</a></li>
              <li><a class="tab-link" href="#" data-menu="tramites">Tramites</a></li>
              <li><a class="tab-link" href="#" data-menu="licitaciones">Licitaciones</a></li>
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--proteccion active">
              <h2 class="servicios__text--heading">Proteccion Legal</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                  <a class="slide__text-link">Contáctanos</a>
                </div>
                <div class="text--body-2">
                  <h3>Contratos (Proteccion Legal)</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Escrituras</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Promesas de Compra y Venta</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <div class="button-container">
                    <a class="slide__text-link">Conoce Más</a>
                  </div>
                  <div class="image-container">
                    <img class="image--body-2" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal-2.jpg" alt="Proteccion Legal">
                  </div>
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--tramites">
              <h2 class="servicios__text--heading">Tramites</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="Proteccion Legal">
                  <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                  <a class="slide__text-link">Contáctanos</a>
                </div>
                <div class="text--body-2">
                  <h3>Contratos (Tramites)</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Escrituras</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Promesas de Compra y Venta</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <div class="button-container">
                    <a class="slide__text-link">Conoce Más</a>
                  </div>
                  <div class="image-container">
                    <img class="image--body-2" src="<?php echo get_template_directory_uri() ?>/images/tramites-2.jpg" alt="Proteccion Legal">
                  </div>
                </div>
              </div>
            </div>
            <div class="servicios__text servicios__text--licitaciones">
              <h2 class="servicios__text--heading">Licitaciones</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/licitaciones.jpg" alt="Proteccion Legal">
                  <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                  <a class="slide__text-link">Contáctanos</a>
                </div>
                <div class="text--body-2">
                  <h3>Contratos (Licitaciones)</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Escrituras</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Promesas de Compra y Venta</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <div class="button-container">
                    <a class="slide__text-link">Conoce Más</a>
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
        <h2 class="servicios__title">Desarrollo de Proyectos</h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="obra-civil" class="active">Obra Civil</a></li>
              <li><a class="tab-link" href="#" data-menu="acabados">Acabados</a></li>
              <li><a class="tab-link" href="#" data-menu="diseno">Diseno de Interiores</a></li>
              <li><a class="tab-link" href="#" data-menu="remodelaciones">Remodelaciones</a></li>
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--obra-civil active">
              <h2 class="servicios__text--heading">Obra Civil</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                  <a class="slide__text-link">Contáctanos</a>
                </div>
                <div class="text--body-2">
                  <h3>Desde cero</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Reparaciones</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
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
                              <img src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="<?php the_title(); ?>">
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
              <h2 class="servicios__text--heading">Acabados</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                  <a class="slide__text-link">Contáctanos</a>
                </div>
                <div class="text--body-2">
                  <h3>Desde cero</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Reparaciones</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
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
                                'value' => 'ACABADOS'
                              )
                            )
                          ));
                          
                          while ($proyectosObraNueva->have_posts()){
                            $proyectosObraNueva->the_post(); ?>
                            <div class="proyectos--realizados__card">
                              <img src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="<?php the_title(); ?>">
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
              <h2 class="servicios__text--heading">Diseño de Interiores</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                  <a class="slide__text-link">Contáctanos</a>
                </div>
                <div class="text--body-2">
                  <h3>Desde cero</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Reparaciones</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
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
                                'value' => 'DISEÑO DE INTERIORES'
                              )
                            )
                          ));
                          
                          while ($proyectosObraNueva->have_posts()){
                            $proyectosObraNueva->the_post(); ?>
                            <div class="proyectos--realizados__card">
                              <img src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="<?php the_title(); ?>">
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
            <div class="servicios__text servicios__text--remodelaciones">
              <h2 class="servicios__text--heading">Remodelaciones</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                  <a class="slide__text-link">Contáctanos</a>
                </div>
                <div class="text--body-2">
                  <h3>Desde cero</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
                  <h3>Reparaciones</h3>
                  <p>Te acompañamos desde la arquitectura, el montaje y la construcción de obra blanca</p>
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
                                'value' => 'REMODELACIONES'
                              )
                            )
                          ));
                          
                          while ($proyectosObraNueva->have_posts()){
                            $proyectosObraNueva->the_post(); ?>
                            <div class="proyectos--realizados__card">
                              <img src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="<?php the_title(); ?>">
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
        <h2 class="servicios__title">Gestion Inmobiliaria</h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="venta" class="active">Venta</a></li>
              <li><a class="tab-link" href="#" data-menu="arriendos">Arriendos</a></li>
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--venta active">
              <h2 class="servicios__text--heading">Venta</h2>
              <div class="servicios__text--body"></div>
            </div>
            <div class="servicios__text servicios__text--arriendos">
              <h2 class="servicios__text--heading">Arriendos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>