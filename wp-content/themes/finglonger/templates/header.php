<header class="banner">
  <?php if(is_front_page()){ ?>
  <div class="home-header">
    <div class="container">
      <div class="row">
        <div class="col-12 center-text">
          <img class="mega-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/finglonger-logo-colour.svg" alt="">
          <?php echo get_field('header_content'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php if (is_page_template('template-docs.php')){  ?>
    <div class="docs-header">
      <div class="container">
        <div class="row">
          <div class="col-6 left-text">
            <img width="150" src="<?php echo get_template_directory_uri(); ?>/assets/images/finglonger-logo-colour.svg" alt="">
          </div>
          <div class="col-6 right-text">
            <a class="back-string" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Finglonger.io</a>
          </div>
        </div>
        <div class="row center-text docs-header-search">
          <div class="col-12">
            <h1>How can we help you?</h1>
          </div>
          <div class="col-10 offset-1">
            <?php echo get_search_form(); ?>
          </div>
          <div class="col-12">
            <?php
            $terms = get_terms( array(
                'taxonomy' => 'topic',
                'hide_empty' => false,
                'number' => 3
            ) );

            ?>
            <p>
              Popular help Topics:
              <?php foreach ($terms as $key => $term) { ?>
                <a href="../topic/<?php echo $term->slug ?>"><?php echo $term->name; ?><?php if($key !== 2){ ?>,<?php } ?>
                </a>
              <?php } ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php if (!is_page_template('template-docs.php')){ ?>
  <div class="container">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav container']);
      endif;
      ?>
    </nav>
  </div>
  <?php } ?>
</header>
