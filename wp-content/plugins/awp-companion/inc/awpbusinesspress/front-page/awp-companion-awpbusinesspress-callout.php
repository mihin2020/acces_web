<?php 
$awpbusinesspress_cta_disabled = get_theme_mod('awpbusinesspress_cta_disabled', true); 
$awpbusinesspress_cta_area_subtitle = get_theme_mod('awpbusinesspress_cta_area_subtitle', 'Do you have any questions?');
$awpbusinesspress_cta_area_des = get_theme_mod('awpbusinesspress_cta_area_des', 'How can we help your business? Because many people love our free consultation for growing their businesses which gives the user complete freedom to set up a business.');
$awpbusinesspress_cta_button_text = get_theme_mod('awpbusinesspress_cta_button_text', 'Contact Us');
$awpbusinesspress_cta_button_link = get_theme_mod('awpbusinesspress_cta_button_link', '#');
$awpbusinesspress_cta_background_image = get_theme_mod('awpbusinesspress_cta_background_image', awp_companion_plugin_url . '/inc/awpbusinesspress/img/callout/callout-bg.jpg');
if($awpbusinesspress_cta_disabled == true): ?>
	<!--Call to Action Section-->	
	<section id="cta-selector-scroll" class="callout-to-action" style="background-image:url('<?php echo esc_url($awpbusinesspress_cta_background_image);?>'"); >
		<div class="container">			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">
					<div class="cta-block text-center">
						<?php if($awpbusinesspress_cta_area_subtitle != null): ?>
							<h2 class="title"><?php echo wp_kses_post($awpbusinesspress_cta_area_subtitle); ?></h2>
						<?php endif;  ?>
						<?php if($awpbusinesspress_cta_area_des != null): ?>						
							<p class="subtitle"><?php echo wp_kses_post($awpbusinesspress_cta_area_des); ?></p>
						<?php endif;  ?>
						<?php if($awpbusinesspress_cta_button_text != null): ?>
							<div class="m-top-40">
								<a href="<?php echo esc_url($awpbusinesspress_cta_button_link); ?>" class="btn-large btn-light btn-animation callout-button">
									<?php echo esc_html($awpbusinesspress_cta_button_text); ?>
								</a>
							</div>
						<?php endif;  ?>
					</div>
				</div>					
			</div>
		</div>
	</section>
	<!--/End of Call to Action Section-->
<?php endif; ?>	