<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 no-padding">
      <div class="banner top-banner"></div>
      <!--<img class="img-responsive" src="<?php echo ROOT; ?>" alt="Young and Free banner" />-->
    </div>
  </div>
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row post">
      <div class="col-xs-12 no-padding">
        <a href="<?php the_permalink(); ?>">
          <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
          <div class="banner" style="background-image: url('<?php echo $thumb[0]; ?>');"></div>
          <!--<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>-->
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