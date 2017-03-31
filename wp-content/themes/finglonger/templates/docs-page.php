<div class="row">
  <div class="col-12 center-text">
    <h1>TRENDING TOPICS</h1>
  </div>
  <div class="col-12">
    <ul class='flex-list'>
    <?php

    $args = array(
      'name' => 'docs'
    );

    $output = 'objects'; // names or objects

    $post_types = get_post_types( $args, $output );
    ?>
    <?php $args = array(
    	'posts_per_page'   => 5,
    	'offset'           => 0,
    	'category'         => '',
    	'category_name'    => '',
    	'orderby'          => 'date',
    	'order'            => 'DESC',
    	'include'          => '',
    	'exclude'          => '',
    	'meta_key'         => '',
    	'meta_value'       => '',
    	'post_type'        => 'docs',
    	'post_mime_type'   => '',
    	'post_parent'      => '',
    	'author'	   => '',
    	'author_name'	   => '',
    	'post_status'      => 'publish',
    	'suppress_filters' => true
    );
    $posts_array = get_posts( $args );
    foreach ($posts_array as $key => $docs) {?>
      <li>
        <a href="<?php echo get_permalink($docs->ID); ?>"><?php echo $docs->post_title; ?></a>
      </li>
    <?php } ?>
    </ul>
    <?php the_content(); ?>
  </div>
</div>
