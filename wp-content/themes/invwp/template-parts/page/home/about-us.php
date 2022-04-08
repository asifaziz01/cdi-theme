<section class="home-about-us">
  <div class="container">
    <div class="row">
      <div class="col-6 d-flex">
        <div class="content-wrap">
          <h6 class="subtitle-primary"><?php echo the_field('about_sub_title'); ?></h6>
          <h2 class="section-title"><?php echo the_field('about_title'); ?></h2>
          <p class="section-description"><?php echo the_field('about_description'); ?></p>
          <p class="mt-30">
            <a class="button button-primary text-uppercase" href="<?php echo site_url('about');?>"><?php echo the_field('about_button_text'); ?></a>
          </p>
        </div>
      </div>
      <div class="col-6 mt-5 text-right">
        <?php
          $image =  get_field('about_image');
        ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" <?php echo $image['height']; ?>/>
      </div>
    </div>
  </div>
</section>
