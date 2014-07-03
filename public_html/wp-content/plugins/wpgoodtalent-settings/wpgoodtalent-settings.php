<?php
/*
 * Plugin Name:       Good Talent
 * Plugin URI:        http://www.goodtalent.com.au
 * Description:       Adjust easily your page
 * Version:           4.0.3
 * Author:            Alex Chavet
 * Author URI:        http://www.alexchavet.com
 * License:           GPL2
*/

/*
Assign global variables
1# plugin directory url
*/

$plugin_url = WP_PLUGIN_URL .'/wpgoodtalent-settings';
$options = array();

/*
add a link to the plugin in admin menu 
under Setting>Goodtalent Settings
*/

function wpgoodtalent_settings_menu(){
/*
Use the add_options_page function
add_options_page(page title, menu title, capability , menu slug, function of the page)
*/
	add_options_page(
			'Good talent settings page',
			'Customize Good talent', 
			'manage_options', 
			'wpgoodtalent-settings', 
			'wpgoodtalent_settings_options_page'
	);

}
add_action('admin_menu','wpgoodtalent_settings_menu');




function wpgoodtalent_settings_options_page(){

	if (!current_user_can('manage_options')){
		wp_die('Bummer! You are not allowed to see this page.');
	}
	
 	global  $plugin_url;
 	global $options;
 	/* Checking the form submission (wpgoodtalent_settings_form) */
	
	if(isset($_POST['wpgoodtalent_settings_form_submitted'])){
		
		$hidden_field = esc_html($_POST['wpgoodtalent_settings_form_submitted']);
		
			if( $hidden_field== 'Y') {
					
					/* Eventbrite */
				$wpgoodtalent_eventbrite_link = esc_html($_POST['wpgoodtalent_eventbrite_link']);
				$options['wpgoodtalent_eventbrite_link'] = $wpgoodtalent_eventbrite_link;
					/* Youtube */
					
				/* Replace w a t c h ? v = (lenght:8) */
				if(isset($_POST['wpgoodtalent_youtube_video'])&&substr($_POST['wpgoodtalent_youtube_video'],-19,8)=="watch?v="){
				$wpgoodtalent_youtube_video=str_replace("watch?v=","embed/",esc_html($_POST['wpgoodtalent_youtube_video']));	
				}
				else {$wpgoodtalent_youtube_video=esc_html($_POST['wpgoodtalent_youtube_video']);}
				/* $wpgoodtalent_youtube_video = esc_html($_POST['wpgoodtalent_youtube_video']); */
				$options['wpgoodtalent_youtube_video'] = $wpgoodtalent_youtube_video;
					/* Facebook */
				$wpgoodtalent_facebook_page = esc_html($_POST['wpgoodtalent_facebook_page']);
				$options['wpgoodtalent_facebook_page'] = $wpgoodtalent_facebook_page;
					/* Twitter */
				$wpgoodtalent_twitter_page = esc_html($_POST['wpgoodtalent_twitter_page']);
				$options['wpgoodtalent_twitter_page'] = $wpgoodtalent_twitter_page;
					/* Instagram */
				$wpgoodtalent_instagram_page = esc_html($_POST['wpgoodtalent_instagram_page']);
				$options['wpgoodtalent_instagram_page'] = $wpgoodtalent_instagram_page;
					/* Store in DB */
				$options['wpgoodtalent_last_updated'] = time();
				update_option('wpgoodtalent_settings',$options); 

			}
		
	}
	
	/* Get from DB */
	$options = get_option('wpgoodtalent_settings');
	if($options!=''){
	/* Eventbrite */
		$wpgoodtalent_eventbrite_link=$options['wpgoodtalent_eventbrite_link'];
	/* Youtube */
		$wpgoodtalent_youtube_video=$options['wpgoodtalent_youtube_video'];
	/* Facebook */
		$wpgoodtalent_facebook_page=$options['wpgoodtalent_facebook_page'];
	/* Twitter */
		$wpgoodtalent_twitter_page=$options['wpgoodtalent_twitter_page'];
	/* Instagram */
		$wpgoodtalent_instagram_page=$options['wpgoodtalent_instagram_page'];
	/* Updataded */
		$wpgoodtalent_last_updated=$options['wpgoodtalent_last_updated'];
	}
	require('inc/option_page_wrapper.php');
	
}


/* Linking some styles to the plugin page  */

function wpgoodtalent_settings_styles(){

	wp_enqueue_style('wpgoodtalent_settings_styles', plugins_url('wpgoodtalent-settings/wpgoodtalent-settings.css'));
	
	}
add_action('admin_head','wpgoodtalent_settings_styles');





?>