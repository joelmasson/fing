<div class="row">
  <div class="col-12">
    <?php the_content(); ?>
    <?php if(is_home() || is_front_page()){ ?>
      <div id="video" class="row section">
        <div class="col-7">
          <?php echo get_field('video_copy'); ?>
          <a class="btn btn-gradient" data-target="#videoModal" data-toggle="modal">PLAY</a>
        </div>
        <div class="col-5">
          <a data-target="#videoModal" data-toggle="modal">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/tv.png" alt="">
          </a>
        </div>
        <div class='modal fade' id='videoModal' tabindex='-1' role='dialog' aria-labelledby='videoModal' aria-hidden="true">
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
              <div class='modal-body'>
                <video src="videofile.ogg" autoplay poster="posterimage.jpg">
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row section">
        <div class="col-5">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/go-icon.png" alt="">
        </div>
        <div class="col-7">
          <?php echo get_field('get_started_copy'); ?>
        </div>
      </div>
      <div class="row section">
        <div class="col-5">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" alt="">
        </div>
        <div class="col-7">
          <?php echo get_field('blog_intro'); ?>
          <a href="/blog">Read the Blog</a>
        </div>
      </div>
      <div class="row section">
        <div class="col-12 callout center-text">
          <?php echo get_field('download'); ?>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-4 right-text">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/pointer.png" alt="">
            </div>
            <div class="col-4 center-text">
              <a href="#">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/download-icon.png" alt="">
                <h3>DOWNLOAD</h3>
              </a>
            </div>
            <div class="col-4 left-text">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/pointer.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row section">
        <div class="col-7">
          <?php echo get_field('licensing_copy'); ?>
          <a href="/licensing">More details from the Law Talkin’ guy.</a>
        </div>
        <div class="col-5">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/license.png" alt="">
        </div>
      </div>
    <?php } ?>
  </div>
</div>
