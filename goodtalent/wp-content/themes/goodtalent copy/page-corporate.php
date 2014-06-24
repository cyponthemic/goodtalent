<?php
/*

Template Name : Corporate

*/

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content small-12 medium-8 large-7 columns right">
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

				<?php comments_template( '', true ); ?>

			<?php endwhile; ?>

		</div>
	</div>
	<aside class="Left large-4 medium-4 small-12 columns">
	TEST
	</aside>
</div>

<?php get_footer(); ?>