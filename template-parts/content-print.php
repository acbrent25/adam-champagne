<section id="portfolio">

<!-- PRINT DESIGN SECTION
================================================== -->
<div class="container">
<h3 class="text-center">Print and Magazine Design</h3>
  <div class="row" id="print-row">
    

    <?php $loop = new WP_Query( array( 'post_type' => 'print_portfolio', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
          $animation_type = get_field('animation_type'); ?>

    <div class="col-md-4 col-sm-6">
      <div class="portfolioImg">
        <!-- Modal Trigger -->
        <a href="<?php echo $url ?>" data-fancybox data-caption="<?php the_title(); ?>">
          <img src="<?php echo $url ?>" alt="<?php the_title(); ?>" class="wow <?php echo $animation_type; ?>">
          
          <div class="overlay">
            <div class="content text-center">

            </div>
          </div><!--/ overlay -->	
        </a>
      </div><!--/ portfolioImg -->		
    </div><!--/ col -->
    <?php endwhile; ?>

  </div><!--/ print-row-->

</div><!--/ print-container -->

</section>