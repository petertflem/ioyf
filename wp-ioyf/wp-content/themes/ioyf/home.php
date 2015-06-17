<?php get_header(); ?>

<?php $options = get_option('ioyf_settings'); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 top-banner">
      <span class="ynf-subtitle"><?php echo $options['ioyf_logo_subtitle']; ?> </span>
      <span class="top-banner-date-and-time"><?php echo $options['ioyf_top_banner_date_and_time']; ?></span>
    </div>
  </div>
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row">
      <div class="col-xs-12">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
        </a>
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