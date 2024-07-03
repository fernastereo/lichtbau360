<?php 

$slides = get_field('slider_principal');

get_header() ?>

<main>
  <div class="slider">
    <ul class="slider-pagi">
      <li class='slider-pagi__elem'></li>
      <li class='slider-pagi__elem'></li>
      <li class='slider-pagi__elem'></li>
    </ul>
    <div class="slides">
      <div class="slide">
        <div class="slide__bg" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
          <img class="slide__image" src="<?= get_theme_file_uri('/images/slider1.jpg') ?>" alt="">
        </div>
        <div class="slide__content">
          <div class="slide__text">
            <?php 
              $headingSlide = $slides['slide_1']['titulo'];
              $subHeadingSlide = $slides['slide_1']['subtitulo'];
              $messageSlide = $slides['slide_1']['mensaje'];
            ?>
            <h2 class="slide__text-heading"><?= esc_attr($headingSlide) ?></h2>
            <p class="slide__text-desc"><?= esc_attr($subHeadingSlide) ?></p>
            <p class="slide__text-content"><?= esc_attr($messageSlide) ?></p>
            <a heref="/#contacto" class="slide__text-link">Contáctanos</a>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide__bg" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
          <img class="slide__image" src="<?= get_theme_file_uri('/images/slider2.jpg') ?>" alt="">
        </div>
        <div class="slide__content">
          <div class="slide__text">
            <?php 
              $headingSlide = $slides['slide_2']['titulo'];
              $subHeadingSlide = $slides['slide_2']['subtitulo'];
              $messageSlide = $slides['slide_2']['mensaje'];
            ?>
            <h2 class="slide__text-heading"><?= esc_attr($headingSlide) ?></h2>
            <p class="slide__text-desc"><?= esc_attr($subHeadingSlide) ?></p>
            <p class="slide__text-content"><?= esc_attr($messageSlide) ?></p>
            <a heref="/#contacto" class="slide__text-link">Contáctanos</a>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide__bg" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
          <img class="slide__image" src="<?= get_theme_file_uri('/images/slider3.jpg') ?>" alt="">
        </div>
        <div class="slide__content">
          <div class="slide__text">
            <?php 
              $headingSlide = $slides['slide_3']['titulo'];
              $subHeadingSlide = $slides['slide_3']['subtitulo'];
              $messageSlide = $slides['slide_3']['mensaje'];
            ?>
            <h2 class="slide__text-heading"><?= esc_attr($headingSlide) ?></h2>
            <p class="slide__text-desc"><?= esc_attr($subHeadingSlide) ?></p>
            <p class="slide__text-content"><?= esc_attr($messageSlide) ?></p>
            <a heref="/#contacto" class="slide__text-link">Contáctanos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<section class="intro">
  <div class="intro-content">
    <h3>Desarrollamos Proyectos, Asesoramos Jurídicamente y te Acompañamos Comercialmente.</h3>
    <h3>Con nuestra asesoría experta, podrás contar un equipo altamente calificado y un acompañamiento integral de inicio a fin.</h3>
  </div>
  <div class="main-message">
    <?php get_template_part('template-parts/components/pilars/lb', 'pilars', ['container_class_modifier' => 'desktop']); ?>
    <div class="main-message__container">
      <div class="main-message__container-intro">
        <div class="main-message__ellipse"></div>
        <h2 class="main-message__text">
          Vive el proceso de<br>forma ligera
        </h2>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/components/pilars/lb', 'pilars', ['container_class_modifier' => 'mobile']); ?>
</section>
<?php get_template_part('template-parts/sections/lb', 'servicios', ['parametro1' => 'valor1', 'parametro2' => 'valor2']); ?>
<?php get_template_part('template-parts/sections/lb', 'contacto', ['parametro1' => 'valor1', 'parametro2' => 'valor2']); ?>
<?php get_footer()?> 
