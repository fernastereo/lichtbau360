<?php 
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
      <?php get_template_part('template-parts/components/servicios/lb', 'slide', [
          'servicio' => $servicios['servicio_1'], 
          'slide' => 'slide-1',
          'query' => []
      ]); ?>
      <?php get_template_part('template-parts/components/servicios/lb', 'slide', [
          'servicio' => $servicios['servicio_2'], 
          'slide' => 'slide-2', 
          'query' => ['post_type' => 'proyecto',
                      'posts_per_page' => 5,
                      'meta_key' => 'executed',
                      'orderby' => 'meta_value_num']
          ]); ?>
      <?php get_template_part('template-parts/components/servicios/lb', 'slide', [
          'servicio' => $servicios['servicio_3'], 
          'slide' => 'slide-3',
          'query' => ['post_type' => 'propiedad',
                      'posts_per_page' => 9]
          ]); ?>
    </div>
  </div>
</section>