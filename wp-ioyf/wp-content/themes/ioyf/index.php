<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 no-padding">
      <img class="img-responsive" src="<?php echo ROOT; ?>/assets/images/top-banner.jpg" alt="Young and Free banner" />
    </div>
  </div>
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row post">
      <div class="col-xs-12 no-padding">
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