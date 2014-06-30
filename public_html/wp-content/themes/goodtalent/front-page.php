<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 1.0
 */

get_header(); ?>
<div class="banner">

	<div class="row">
		<div class="large-7 columns video left">
		<div class="flex-video widescreen vimeo">
			<iframe src="http://player.vimeo.com/video/60122989" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
		</div>
		<div class="right large-offset-1 large-4 show-for-large-up columns" style="height:65px"></div>
		<div class="large-offset-1 large-4 columns book-now right">
		<h1>Join us at the next Good Talent event</h1>
		<a href="<?php echo $wpgt_settings['wpgoodtalent_eventbrite_link']?>" class="button text-center">Book now</a>
		</div>
	</div>
</div>
<div class="row">
	<div id="primary" class="site-content small-12 medium-12 columns">
		<div id="content" role="main">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); 
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
				?>
				
				<style>
				 .banner{
					 position: relative;
					 background:url('<?php echo get_stylesheet_directory_uri().'/img/stripe.png'?>');
				 }
				 .banner:before {
					 content : "";
					 display: block;
					 position: absolute;
					 top: -50%;
					 left: 0;
					 background: #333333;
					 width: 100%;
					 height: 150%;
					 opacity : 0.8;
					 z-index: -1;
					}
					 .banner:after {
					 content : "";
					 display: block;
					 position: absolute;
					 top: -50%;
					 left: 0;
					 background:  
					 				url('<?php echo $src[0]; ?>');
					 width: 100%;
					 height: 150%;
					 opacity : 0.25;
					 z-index: -2;
					}
				 </style>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">

				<?php if ( current_user_can( 'edit_posts' ) ) :
					// Show a different message to a logged-in user who can add posts.
				?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'No posts to display', 'cornerstone' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'cornerstone' ), admin_url( 'post-new.php' ) ); ?></p>
					</div>

				<?php else :
					// Show the default message to everyone else.
				?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'cornerstone' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'cornerstone' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				<?php endif; // end current_user_can() check ?>

				</article>

			<?php endif; ?>

			<?php // Pagination
				if (function_exists("emm_paginate")) {
			    emm_paginate();
			} ?>

		</div>
	</div>

</div>

<?php get_footer(); ?>