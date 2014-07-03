<?php
global $wpgt_settings;
$wpgt_settings=array();
$wpgt_settings=get_option('wpgoodtalent_settings');
?>

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
		<?php  include('inc/mail-chimp.php');?>
		</div>
		<div class="large-2 large-offset-1 medium-5 medium-offset-1 left small-6 columns social-footer">
		<a href="<?php echo $wpgt_settings['wpgoodtalent_facebook_page'];?>"><i class="fi-social-facebook left"></i></a>
		<a href="<?php echo $wpgt_settings['wpgoodtalent_twitter_page'];?>"><i class="fi-social-twitter left"></i></a>
		<a href="<?php echo $wpgt_settings['wpgoodtalent_instagram_page'];?>"><i class="fi-social-instagram left"></i></a>
		<a href="<?php echo $wpgt_settings['wpgoodtalent_eventbrite_link'];?>"><i class="fi-calendar left"></i></a>	
		</div>
		
		<div class="large-3 large-offset-0 medium-5 left small-6 columns copyright-footer">
		<ul>
		
		<li class="cameron-boyle-logo right"></li>
		
		</ul>
		</div>
	</footer>
</div>
<div id="copyright" class="row">
	<div class="large-6 large-centered text-center columns">
	<p class="text-center" style="font-size:18px;">Copyright ©2014, All Rights Reserved</p>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>