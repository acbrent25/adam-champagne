<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adam_Champagne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adam-champagne' ); ?></a>

	<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		

    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        &#9776;
      </button>
      <div class="collapse navbar-collapse" id="collapsingNavbar">
        
        <?php
            wp_nav_menu( array(
              'theme_location' => 'navbar',
              'container'      => false,
              'menu_class'     => 'nav navbar-nav ml-auto',
              'fallback_cb'    => '__return_false',
              'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'          => 2,
              'walker'         => new bootstrap_4_walker_nav_menu()
          ) );
        ?>
        <?php get_template_part('navbar-search'); ?>
      </div>
    </nav>
					
  </header>
  
<div id="content" class="site-content">