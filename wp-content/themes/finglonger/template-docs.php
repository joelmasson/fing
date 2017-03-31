<?php
/**
 * Template Name: Docs Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/docs', 'header'); ?>
  <?php get_template_part('templates/docs', 'page'); ?>
<?php endwhile; ?>
