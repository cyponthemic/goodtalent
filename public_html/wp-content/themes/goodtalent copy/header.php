<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="initial-scale=1.0" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">

<div class="row">
<div class="large-4 small-9 columns" style="height:50px;background:white;"></div> <div class="large-8 small-3 columns" style="height:50px;background:orange;"></div>
</div>
<div class="contain-to-grid sticky" style="background:transparent;">
		<nav class="top-bar" data-topbar>
		  <ul class="title-area">
		    <li class="name">
		      <h1><a href="#">My Site</a></h1>
		    </li>
		     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  </ul>
		
		  <section class="top-bar-section">
		   <?php
	      // Left Nav
	      if ( has_nav_menu( 'header-menu-right' ) ) {
	          wp_nav_menu( array(
	              'theme_location' => 'header-menu-right',
	              'container' => false,
	              'depth' => 0,
	              'items_wrap' => '<ul class="right">%3$s</ul>',
	              'fallback_cb' => false,
	              'walker' => new cornerstone_walker( array(
	                  'in_top_bar' => true,
	                  'item_type' => 'li'
	              ) ),
	          ) );
	        }
	      ?> 		
		  </section>
		</nav>
</div>
<div class="row">
<div class="large-4 small-9 columns" style="height:50px;background:white;"></div> <div class="large-8 small-3 columns" style="height:50px;background:orange;"></div>
</div>
</div>
</div>