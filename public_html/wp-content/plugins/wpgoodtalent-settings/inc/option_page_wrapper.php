
<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>Good talent Setting</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Links</span></h3>
						<div class="inside">
							
							<form name="wpgoodtalent_settings_form" method="post" action="">
							<!--
								This input is used to verify to the form has been submitted by checking the variable
								POST_('wpgoodtalent_settings_form_submitted')=="Y"
								
								string substr ( string $string , int $start [, int $length ] )
							-->
							
								<input type="hidden" name="wpgoodtalent_settings_form_submitted" value="Y">
							<?php							if(isset($wpgoodtalent_eventbrite_link)&&substr($wpgoodtalent_eventbrite_link, 0,3)!='htt'):
								$wpgoodtalent_eventbrite_link_err=true;
								echo '<div class="error"><p>Invalid Fields</p></div>';
								
							
							elseif(isset($wpgoodtalent_eventbrite_link)):echo '<div class="updated"><p>Saved: '.date('d-m-Y GG:i',$wpgoodtalent_last_updated).'</p></div>';
							endif;
							?>
							<table class="form-table">
							<tr>
							<th>Home page :</th>
							<tr>
								<tr>
									<td>
										<label for="wpgoodtalent_eventbrite_link">URL Eventbrite</label>
									<td>
										<input name="wpgoodtalent_eventbrite_link" id="wpgoodtalent_eventbrite_link" type="text" value="<?php echo $wpgoodtalent_eventbrite_link;?>" class="regular-text" />
									</td>
								</tr>
								
								<tr>
									<td>
										<label for="wpgoodtalent_youtube_video">URL Youtube video</label>
									<td>
										<input name="wpgoodtalent_youtube_video" id="wpgoodtalent_youtube_video" type="text" value="<?php echo $wpgoodtalent_youtube_video;?>" class="regular-text" />
									</td>
								</tr>
								<tr>
										<th>Social media :</th>
								<tr>
								<tr>
									<td>
										<label for="wpgoodtalent_facebook_page">URL Facebook page</label>
									<td>
										<input name="wpgoodtalent_facebook_page" id="wpgoodtalent_facebook_page" type="text" value="<?php echo $wpgoodtalent_facebook_page;?>" class="regular-text" />
									</td>
								</tr>
								
								<tr>
									<td>
										<label for="wpgoodtalent_twitter_page">URL Twitter page</label>
									<td>
										<input name="wpgoodtalent_twitter_page" id="wpgoodtalent_twitter_page" type="text" value="<?php echo $wpgoodtalent_twitter_page;?>" class="regular-text" />
									</td>
								</tr>
								
								<tr>
									<td>
										<label for="wpgoodtalent_instagram_page">URL Instagram page</label>
									<td>
										<input name="wpgoodtalent_instagram_page" id="wpgoodtalent_instagram_page" type="text" value="<?php echo $wpgoodtalent_instagram_page;?>" class="regular-text" />
									</td>
								</tr>
								
							</table>
							
							<p>
							<input class="button-primary" type="submit" name="wpgoodtalent_eventbrite_link_submit" value="Save">
							</p>
							</form>	
							
							
							
						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span>Sidebar Content Header</span></h3>
						<div class="inside">
							Content space
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->