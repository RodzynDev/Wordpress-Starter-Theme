<?php 
  get_header();
  the_post();
?>
  <section id="page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
<?php 
  get_footer(); 
?>