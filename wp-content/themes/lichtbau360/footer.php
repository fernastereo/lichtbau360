<footer>
  <div class="footer-container">
    <div class="site-footer__column site-footer__column-one">
      <h3 class="headline headline--small">Lichtbau360</h3>
      <nav class="nav-footer"> 
        <ul>
          <li><a href="/#contacto">Contactanos</a></li>
          <li><a href="/">Procesos de Calidad</a></li>
          <li><a href="/">Certificaciones</a></li>
        </ul>
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
      </nav>
    </div>
    <div class="site-footer__column site-footer__column-two">
      <h3 class="headline headline--small">Servicios</h3>
      <nav>
        <ul>
          <li><a href="/#servicios">Desarrollo de Proyectos</a></li>
          <li><a href="/#servicios">Asesorías Jurídicas</a></li>
          <li><a href="/#servicios">Gestión Inmobiliaria</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="footer-text">
    <span class="footer-text-msg">Presencia en</span><span class="footer-text-ciudades">Barranquilla, Santa Marta, Cartagena</span><span class="footer-text-msg">y toda la costa caribe Colombiana</span>
  </div>
  <div class="copyright">
    <div class="copyright__links">
      <a href="<?= site_url('/politica-privacidad') ?>">Politica de tratamiento de datos</a>
      <a href="/">Terminos y condiciones</a>
    </div>
    <a href="/">Copyright 2024</a>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
