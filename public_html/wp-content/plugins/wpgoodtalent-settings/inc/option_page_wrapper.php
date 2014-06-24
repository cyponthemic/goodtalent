
<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>Good talent Setting</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Home page</span></h3>
						<div class="inside">
							
							<form name="wpgoodtalent_settings_form" method="post" action="">
							<!--
								This input is used to verify to the form has been submitted by checking the variable
								POST_('wpgoodtalent_settings_form_submitted')=="Y"
								
								string substr ( string $string , int $start [, int $length ] )
							-->
							
								<input type="hidden" name="wpgoodtalent_settings_form_submitted" value="Y">
							<?php							if(isset($wpgoodtalent_eventbrite_link)&&substr($wpgoodtalent_eventbrite_link, 0,8)!='https://'):
								$wpgoodtalent_eventbrite_link_err=true;
								echo '<div class="error"><p>Invalid Fields</p></div>';
								
							
							elseif(isset($wpgoodtalent_eventbrite_link)):echo '<div class="updated"><p>Saved</p></div>';
							endif;
							?>
							<table class="form-table">
								<tr>
									<td>
										<label for="wpgoodtalent_eventbrite_link">Lien Eventbrite</label>
									<td>
										<input name="wpgoodtalent_eventbrite_link" id="wpgoodtalent_eventbrite_link" type="text" value="<?php echo $wpgoodtalent_eventbrite_link;?>" class="regular-text" />
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