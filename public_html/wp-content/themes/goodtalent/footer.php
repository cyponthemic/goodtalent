<?php
global $wpgt_settings;
$wpgt_settings=array();
$wpgt_settings=get_option('wpgoodtalent_settings');
?>

<div class="footer-mark"></div>

<div id="footer">



	<div class="row">
  <div class="small-6 large-3 columns"><?php if ( has_nav_menu( 'footer-menu' ) ) {
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
		} ?></div>
  <div class="small-6 large-3 columns"><?php  include('inc/mail-chimp.php');?></div>
  
  <div class="small-12 large-3 columns"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
		<?php endif; ?></div>
		
		
  <div class=" small-12 large-3 columns"><ul>
		
		
		
		<li class="social"><a href="<?php echo $wpgt_settings['wpgoodtalent_facebook_page'];?>"target="_blank"><i class="fi-social-facebook left"></i></a></li>
		<li class="social"><a href="<?php echo $wpgt_settings['wpgoodtalent_twitter_page'];?>"target="_blank"><i class="fi-social-twitter left"></i></a></li>
		<li class="social"><a href="<?php echo $wpgt_settings['wpgoodtalent_instagram_page'];?>"target="_blank"><i class="fi-social-instagram left"></i></a></li>
		<li class="social"><a href="<?php echo $wpgt_settings['wpgoodtalent_eventbrite_link'];?>"target="_blank"><i class="fi-calendar left"></i></a></li>
	
		</ul></div>
</div>
	</footer>
</div>

<div class="footer-mark"></div>
<div id="copyright" class="row">
	<div class="large-6 large-centered text-center columns">
	<p class="text-center" style="font-size:18px;"> Home image thanks to MFB &nbsp;&nbsp;|&nbsp;&nbsp; Site by <a href="http://www.cameronboyle.com.au" target="_blank">Cameron Boyle</a><br>Copyright ©2014, All Rights Reserved
	
	</p>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>