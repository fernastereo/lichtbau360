<?php 
$parametro1 = isset($args['parametro1']) ? 'pilars--' . $args['parametro1'] : '';
$parametro2 = isset($args['parametro2']) ? 'pilars--' . $args['parametro2'] : '';

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
        <h2 class="servicios__title">Asesoría Jurídica</h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="proteccion" class="active">Gestión Inmobiliaria</a></li>
              <!-- <li><a class="tab-link" href="#" data-menu="tramites">Trámites</a></li>
              <li><a class="tab-link" href="#" data-menu="licitaciones">Licitaciones</a></li> -->
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--proteccion active">
              <h2 class="servicios__text--heading-mobile">Gestión Inmobiliaria</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Gestión Inmobiliaria</h2>
                    <p>La gestión Inmobiliaria en Lichtbau, abarca una serie de servicios integrales diseñados para cubrir todos los aspectos del ciclo de vida de una propiedad.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3>Búsqueda y Selección de Propiedades</h3>
                  <p>Identificamos y seleccionamos propiedades que cumplen con los requisitos y objetivos de inversión de nuestros clientes.</p>
                  <h3>Evaluación y Due Diligence</h3>
                  <p>Realizamos evaluaciones exhaustivas de las propiedades potenciales, incluyendo estudios de mercado, análisis de viabilidad, y due diligence legal y técnica.</p>
                  <h3>Gestión Operativa</h3>
                  <p>Coordinamos y ejecutamos los mantenimientos, reparaciones, y servicios esenciales de las propiedades. </p>
                  <div class="button-container">
                    <a class="slide__text-link">Conoce Más</a>
                  </div>
                  <div class="image-container">
                    <img class="image--body-2" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal-2.jpg" alt="Proteccion Legal">
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="servicios__text servicios__text--tramites">
              <h2 class="servicios__text--heading-mobile">Trámites</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Trámites</h2>
                    <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
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
              <h2 class="servicios__text--heading-mobile">Licitaciones</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/licitaciones.jpg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Licitaciones</h2>
                    <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
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
            </div> -->
          </div>
        </div>
      </div>
      <div class="servicios--slide proyectos">
        <h2 class="servicios__title">Desarrollo de Proyectos</h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="obra-civil" class="active">Arquitectura y Diseño</a></li>
              <li><a class="tab-link" href="#" data-menu="acabados">Construcción</a></li>
              <li><a class="tab-link" href="#" data-menu="diseno">Obras Civiles</a></li>
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--obra-civil active">
              <h2 class="servicios__text--heading-mobile">Arquitectura y Diseño</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Arquitectura y Diseño</h2>
                    <p>En Lichtbau360 ofrecemos una gama completa de servicios de arquitectura que abarcan desde el diseño conceptual hasta la ejecución final del proyecto.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3>Diseños Arquitectónicos</h3>
                  <p>Desarrollamos los conceptos iniciales y diseños preliminares de tus proyectos, mediante la creación de planos detallados y especificaciones técnicas.</p>
                  <h3>Modelado 3D y Renderización</h3>
                  <p>Producimos modelos tridimensionales y renderizados de alta calidad para visualizar tus proyectos de manera realista.</p>
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
              <h2 class="servicios__text--heading-mobile">Construcción</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Construcción</h2>
                    <p>Nuestra empresa se especializa en la construcción de proyectos residenciales, comerciales e industriales, garantizando lo más altos estándares de calidad, cumplimiento de presupuesto y plazos.</p>
                    <p>Realizamos la remodelación y renovación que transforman y actualizan propiedades existentes. Ya sea que se trate de modernizar un espacio o de hacer mejoras estructurales, garantizando resultados que superan las expectativas.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3>Gestión Integral de Proyectos</h3>
                  <p>Coordinamos todas las etapas del proyecto, desde la planificación inicial hasta la entrega final.</p>
                  <h3>Ejecución de Obra</h3>
                  <p>Ejecutamos la construcción de acuerdo con los planos y especificaciones, asegurando precisión y calidad.</p>
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
              <h2 class="servicios__text--heading-mobile">Obras Civiles</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Obras Civiles</h2>
                    <p>Somos expertos en la ejecución de grandes proyectos de infraestructura que contribuyen al desarrollo y mejoramiento de las comunidades.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
                </div>
                <div class="text--body-2">
                  <h3>Infraestructura Pública</h3>
                  <p>Diseñamos y construimos carreteras, puentes, túneles y otras infraestructuras esenciales.</p>
                  <h3>Ingeniería Estructural</h3>
                  <p>Realizamos el diseño y construcción de estructuras sólidas y seguras que cumplen con todas las normativas vigentes.</p>
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
        <h2 class="servicios__title">Comercialización</h2>
        <div class="servicios__content">
          <div class="servicios__content--menu">
            <ul>
              <li><a class="tab-link" href="#" data-menu="venta" class="active">Venta</a></li>
              <!-- <li><a class="tab-link" href="#" data-menu="arriendo">Arriendos</a></li> -->
            </ul>
          </div>
          <div class="servicios__text--container">
            <div class="servicios__text servicios__text--venta active">
              <h2 class="servicios__text--heading-mobile">Venta</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Venta</h2>
                    <p>Proporcionamos asesoría legal en todas las etapas del proceso de compra y venta de propiedades, incluyendo la redacción y revisión de contratos, la verificación de títulos y la negociación de términos.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                </div>
                <div class="text--body-2">
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
              <h2 class="servicios__text--heading-mobile">Arriendos</h2>
              <div class="servicios__text--body">
                <div class="text--body-1">
                  <div class="details--body-1">
                    <h2 class="servicios__text--heading-desktop">Arriendos</h2>
                    <p>Diseñamos tus espacios de tu sueños, para que dese la estructura hasta las los detalles sean lo que deseas.</p>
                    <a class="slide__text-link">Contáctanos</a>
                  </div>
                  <img class="image--body-1" src="<?php echo get_template_directory_uri() ?>/images/proteccion-legal.jpeg" alt="Proteccion Legal">
                </div>
                <div class="text--body-2">
                  <div class="proyectos__list--container">
                    <h2>Construimos lo que necesites, nos adaptamos a tus necesidades</h2>
                    <hr style="margin: 0 3rem;">
                    <div class="propiedades">
                      <div class="propiedades__slider">
                        <div class="propiedades__card">
                          <img src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="<?php the_title(); ?>">
                          <div class="propiedades__card--details">
                            <h4><a href="#">Casa 1</a></h4>
                            <p>Barranquilla</p>
                            <p>Riomar</p>
                            <p>380.000.000</p>
                            <div class="button-container">
                              <a class="slide__text-link">Ver Más</a>
                            </div>
                          </div>
                        </div>
                        <div class="propiedades__card">
                          <img src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="<?php the_title(); ?>">
                          <div class="propiedades__card--details">
                            <h4><a href="#">Casa 1</a></h4>
                            <p>Barranquilla</p>
                            <p>Riomar</p>
                            <p>380.000.000</p>
                            <div class="button-container">
                              <a class="slide__text-link">Ver Más</a>
                            </div>
                          </div>
                        </div>
                        <div class="propiedades__card">
                          <img src="<?php echo get_template_directory_uri() ?>/images/tramites.jpg" alt="<?php the_title(); ?>">
                          <div class="propiedades__card--details">
                            <h4><a href="#">Casa 1</a></h4>
                            <p>Barranquilla</p>
                            <p>Riomar</p>
                            <p>380.000.000</p>
                            <div class="button-container">
                              <a class="slide__text-link">Ver Más</a>
                            </div>
                          </div>
                        </div>
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