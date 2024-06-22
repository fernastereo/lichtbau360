<?php
$background_image = get_theme_file_uri("/images/plano-arquitecto.jpg");
$lichtbau_image = get_theme_file_uri("/images/lichtbau360.png");
$hero_output = sprintf('
  <div class="hero" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(%s);">
    <div class="hero-content">
      <img class="hero-image" src="%s" alt="Lichtbau360">  
      <p class="hero-description">Proyectando tus sueños</p>
    </div>
    <div class="hero-circle">
    </div>
  </div>',
  $background_image,
  $lichtbau_image
);

echo $hero_output;
