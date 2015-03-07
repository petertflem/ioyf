<?php get_header(); ?>

<?php
  $options = get_option('ioyf_settings');
?>

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img src="<?php echo ROOT; ?>/assets/images/oks-logo.png" class="oks-logo img-responsive" alt="oks logo" />
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 top-banner">
          <span class="ynf-subtitle"><?php echo $options['ioyf_logo_subtitle']; ?> </span>
          <span class="top-banner-date-and-time"><?php echo $options['ioyf_top_banner_date_and_time']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 top-information">
          <?php echo apply_filters('the_content', $options['top_information']); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 young-and-free-banner">
          <div class="young-and-free-banner-container">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="time-information">
            <img src="<?php echo ROOT; ?>/assets/images/watch.png" class="img-responsive" alt="bilde av en klokke" />
            <p><?php echo $options['duration_information']; ?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 freedom-background-color">
          <div class="freedom-container">
            <div class="freedom">
              <span class="freedom-title"><?php echo $options['freedom_title']; ?></span>
              <br />
              <br />
              <br />
              <span><?php echo apply_filters('the_content', $options['freedom_text']); ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 bottom-information">
          <?php echo apply_filters('the_content', $options['bottom_information']); ?>
        </div>
      </div>
      <div class="row map-row">
        <div class="col-cs-12">
          <div id="map"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 facebook">
          <div class="facebook-container">
            <a href="<?php echo $options['ioyf_facebook_banner_link']; ?>">
              <img src="<?php echo ROOT; ?>/assets/images/facebook-logo.png" class="img-responsive facebook-logo" alt="facebook logo" />
              <span><?php echo $options['ioyf_facebook_banner_text']; ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>