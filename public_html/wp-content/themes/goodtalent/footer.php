<div id="footer">
	<footer class="row">
		
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer-menu' ) ) {
			/* echo '<div class="row">'; */
			 wp_nav_menu( array(
	              'theme_location' => 'header-menu-right',
	              'container' => 'div',
	              'container_class' => 'large-3 columns',
	              'depth' => 0,
	              'menu_class'      => 'menu-footer',
	              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	              'fallback_cb' => false,
	              
	       
	              ));

						/* echo '</div>'; */
		} ?>
		<div class="large-3 columns social-footer">
		<?php mailchimpSF_signup_form(); ?>
		</div>
		<div class="large-3 columns social-footer">
		<i class="fi-social-facebook right"><a href="www.twitter.com"></a></i>
		<i class="fi-social-twitter right"><a href="www.facebook.com"></a></i>
		<i class="fi-calendar right"><a href="www.eventbrite.com"></a></i>	
		</div>
		
		<div class="large-3 columns social-footer">
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