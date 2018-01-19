<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>

  <?php get_template_part('./template-parts/content','hero'); ?>
  <?php get_template_part('./template-parts/content','about'); ?>
  <?php get_template_part('./template-parts/content','skills'); ?>
  <?php get_template_part('./template-parts/content','webdev'); ?>
  <?php get_template_part('./template-parts/content','appdev'); ?>
  <?php get_template_part('./template-parts/content','print'); ?>
  <?php get_template_part('./template-parts/content','quotes'); ?>
  <?php get_template_part('./template-parts/content','footer'); ?>
	
<?php get_footer(); ?>