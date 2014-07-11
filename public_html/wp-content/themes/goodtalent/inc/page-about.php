<?php
/*

Template Name : About

*/

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content small-12 medium-8 large-8 columns right">
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
							

		</div>
	</div>
	<aside class="Left large-4 medium-4 small-12 columns">
					<div style="height:30px;"></div>
						<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						  the_post_thumbnail();
						} 
						?>					
	</aside>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>