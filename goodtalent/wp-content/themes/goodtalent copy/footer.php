<div id="footer">
	<footer class="row">
		
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer-menu' ) ) {
			echo '<div class="row">';
			 wp_nav_menu( array(
	              'theme_location' => 'header-menu-right',
	              'container' => 'div',
	              'container_class' => 'large-6 columns',
	              'depth' => 0,
	              'menu_class'      => 'menu-footer',
	              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	              'fallback_cb' => false,
	              
	       
	              ));

						echo '</div>';
		} ?>
		
		<div class="large-3">
		<a href="#" class="fc-webicon facebook">Like us on Facebook</a>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>