<article <?php post_class(); ?>>
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2">
  <header>
    <?php $img = get_the_post_thumbnail_url();
    if ($img) { ?>
      <div class="article-hero">
        <img src="<?php echo $img; ?>" alt="">
      </div>
    <? } ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</div></div>
</article>
