<?php get_header() ?>

<div class="main">
<?php 
  while (have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content();?>
    <hr>
  <?php }
?>
</div>
<?php get_footer()?>