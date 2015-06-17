<?php $options = get_option('ioyf_settings'); ?>

<?php get_header(); ?>

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
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row">
      <div class="col-xs-12">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>
  <?php endwhile; else : ?>
    <div class="row">
      <div class="col-xs-12">
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
      </div>
    </div>
  <?php endif; ?>
  
</div>

<?php get_footer(); ?>