<footer class="content-info">
  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="col-12 center-text">
          <?php echo get_field('footer_copy','options'); ?>
        </div>
        <div class="col-12">
          <?php echo do_shortcode('[contact-form-7 id="63" title="Contact form 1"]'); ?>
        </div>
    </div>
  </div>
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-12 center-text">
          <p>© LEGAL <?php echo date(Y); ?></p>
        </div>
      </div>
    </div>
  </div>
</footer>
