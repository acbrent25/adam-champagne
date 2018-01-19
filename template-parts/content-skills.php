<!-- SKILLS
	================================================== -->
	<section id="skills">

		<div class="container">
			<h2 class="text-center">Skills</h2>
			<div id="skills-row" class="row">		

          <!-- LEFT COLUMN SKILLS
	        ================================================== -->
          <div class="col-md-6" id="left-col">
            <!-- Run Loop -->
            <?php $loop = new WP_Query( array( 'post_type' => 'skill', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- Declare Variable -->
            <?php  $skill_percent = get_field('skill_percent'); ?>
            
            <div class="row">
                <!-- Skill  -->
                  <div class="col-4">
                    <h5 class="progress-label"><?php the_title(); ?></h5>
                  </div><!--/. col-xs-12  -->
                  <div class="col-8">
                    <div class="progress" style="height: 20px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill_percent ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill_percent ?>%">
                        <span class="sr-only"><?php echo $skill_percent; ?> Complete (success)</span>
                      </div><!--/. progress-bar -->
                    </div><!--/. progress  -->
                  </div><!--/. col-xs-12  -->
              </div>
              <?php endwhile;  ?>
          </div><!--/. col-md-6 -->

          <!-- RIGHT COLUMN SKILLS
	        ================================================== -->
          <div class="col-md-6" id="right-col">
            <!-- Run Loop -->
            <?php $loop = new WP_Query( array( 'post_type' => 'right_skills', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- Declare Variable -->
            <?php  $skill_percent = get_field('skill_percent'); ?>
            
            <div class="row">
                <!-- Skill  -->
                  <div class="col-4">
                    <h5 class="progress-label"><?php the_title(); ?></h5>
                  </div><!--/. col-xs-12  -->
                  <div class="col-8">
                    <div class="progress" style="height: 20px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill_percent ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill_percent ?>%">
                        <span class="sr-only"><?php echo $skill_percent; ?> Complete (success)</span>
                      </div><!--/. progress-bar -->
                    </div><!--/. progress  -->
                  </div><!--/. col-xs-12  -->
              </div>
              <?php endwhile;  ?>
          </div><!--/. col-md-6 -->
    </div><!--/. skills row  -->
  </div><!--/. container -->
</section>    


          
          	
     
					