<div id="footer">
	<footer class="row">
		
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer-menu' ) ) {
			/* echo '<div class="row">'; */
			 wp_nav_menu( array(
	              'theme_location' => 'header-menu-right',
	              'container' => 'div',
	              'container_class' => 'large-3 large-offset-0 medium-5 medium-offset-1 small-6 left columns menu-footer',
	              'depth' => 0,
	              'menu_class'      => 'menu-footer',
	              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	              'fallback_cb' => false,
	              
	       
	              ));

						/* echo '</div>'; */
		} ?>
		<div class="large-3 large-offset-0 medium-5 left small-6 columns mailchimp-form">
		<?php  include('inc/mail-chimp.php')?>
		</div>
		<div class="large-2 large-offset-1 medium-5 medium-offset-1 left small-6 columns social-footer">
		<i class="fi-social-facebook left"><a href="www.twitter.com"></a></i>
		<i class="fi-social-twitter left"><a href="www.facebook.com"></a></i>
		<i class="fi-calendar left"><a href="www.eventbrite.com"></a></i>	
		</div>
		
		<div class="large-3 large-offset-0 medium-5 left small-6 columns copyright-footer">
		<ul>
		<li id="copyright">Copyright ©2014, All Rights Reserved</li>
		<li class="cameron-boyle-logo right"></li>
		
		</ul>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>