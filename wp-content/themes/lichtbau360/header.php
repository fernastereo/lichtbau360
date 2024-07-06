<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <nav class="navbar">
      <a href="/" class="nav-branding">
        <?= lichtbau_logo() ?>
      </a>
      <div class="nav-menu-container">
        <div class="social-icons-container">
          <a href="https://www.instagram.com/lichtbau360" target="_blank">
            <?= social_icon('instagram') ?>
          </a>
          <a href="https://www.tiktok.com/@lichtbau360" target="_blank">
            <?= social_icon('tiktok') ?>
          </a>
          <a href="https://www.youtube.com/@LICHTBAU360" target="_blank">
            <?= social_icon('youtube') ?>
          </a>
          <a href="http://facebook.com/lichtbau360" target="_blank">
            <?= social_icon('facebook') ?>  
          </a>
          <a href="https://www.linkedin.com/company/lichtbau360/about/" target="_blank">
            <?= social_icon('linkedin') ?>
          </a>
        </div>
        <div class="ellipse"></div>
          <?php wp_nav_menu([
            'theme_location' => 'headerMenuLocation',
            'container' => 'ul',
            'menu_class' => 'nav-menu',
            'add_li_class'  => 'nav-link'
          ]) ?>
      </div>
      
      <?php get_template_part('template-parts/components/language-switcher/lb', 'language-switcher', ['container_class_modifier' => 'header']) ?>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
