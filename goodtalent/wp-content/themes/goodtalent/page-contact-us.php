<?php
/*

Template Name : About

*/

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content small-12 medium-6 large-6 columns left">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'cornerstone' ), '<span class="edit-link">', '</span>' ); ?>
					</footer>

				</article>

			<?php endwhile; ?>

		</div>
	</div>
	<aside id="side_form" class="Right large-6 medium-6 small-12 columns">
	<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
	</aside>
</div>

<?php get_footer(); ?>	