<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <div class="row">
      <div class="col-xs-12 no-padding">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
        <img class="img-responsive" src="<?php echo $image[0]; ?>" />
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    </div>

  <?php endwhile; else : ?>
    <div class="row">
      <div class="col-xs-12">
        <?php _e( 'Sorry, no posts matched your criteria.', 'ioyf' ); ?>
      </div>
    </div>
  <?php endif; ?>
  
</div>

<?php get_footer(); ?>