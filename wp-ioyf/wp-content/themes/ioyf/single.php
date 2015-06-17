<?php $options = get_option('ioyf_settings'); ?>

<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row">
      <div class="col-xs-12">
        <?php $image = $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
        <div class="single-header-image" style="background: url('<?php echo $image[0]; ?>') no-repeat center fixed;">
          <div style="height: <?php echo $image[2] ?>px;"></div>
        </div>
        
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      
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