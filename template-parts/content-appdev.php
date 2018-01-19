<!-- PORTFOLIO
================================================== -->

<section id="portfolio">
	
	<div class="container">
    <h3 class="text-center">Web Application</h3>
		
    <!-- WEB APP SECTION
    ================================================== -->
    
    <div class="row" id="web-dev">
    
      <!-- Start the loop -->
    <?php $loop = new WP_Query( array( 'post_type' => 'web_app_portfolio', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

      <!-- Declare Variable -->
      <?php   $thumbnail_image = get_field('thumbnail_image');
              $thumbnail_title = get_field('thumbnail_title');
              $website = get_field('website');
              $animation_type = get_field('animation_type');
              $modal_id = get_field('modal_id'); ?>

      <div class="col-md-4 col-sm-6">
        <div class="portfolioImg">
          <!-- Modal Trigger -->
          <a href="#" data-toggle="modal" data-target="#<?php echo $modal_id; ?>">
            <img src="<?php echo $thumbnail_image; ?>" alt="<?php echo $thumbnail_title; ?>" class="wow <?php echo $animation_type; ?>">
            <div class="overlay">
              <div class="content text-center">
                <h2><?php echo $thumbnail_title; ?></h2>
              </div>
            </div>
          </a>
        </div>	
      </div><!--/ col -->

      <!-- MODAL
      ================================================== -->
        <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="vertical-alignment-helper">
              <div class="modal-dialog modal-lg vertical-align-center" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  
                  </div><!--/ modal-header -->
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-8">
                          <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive', 'style' => 'height: auto' ) ); ?>
                      </div><!--/ col -->
                      <div class="col-md-4 text-left">
                        <p><?php the_content(); ?></p>
                        <p class="tag-row"> <?php the_tags( '', ' ', $after ); ?> </p>
                        <p class="modal-link">Link: <a href="<?php echo $website; ?>" target="_blank"><?php echo $thumbnail_title; ?></a></p>	
                      </div><!--/ col -->
                    </div><!--/ row -->
                  </div><!--/ modal-body -->
                </div><!--/ modal-content -->
              </div><!--/ modal-dialog modal-lg -->
            </div><!--/ modal-helper -->
          </div><!--/ modal -->
      <!-- MODAL : END
      ================================================== -->

      <?php endwhile;  ?>
    </div><!--/ row -->
  </div><!--/ container -->	
</section><!--/ portfolio -->