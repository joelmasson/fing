<?php if(is_home()||is_page('blog')){ ?>
  <div class="page-header row">
    <div class="col-sm-4 offset-sm-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" alt="">
    </div>
    <div class="col-sm-4">
      <h1><?php single_post_title(); ?></h1>
    </div>
  </div>
<?php } ?>
