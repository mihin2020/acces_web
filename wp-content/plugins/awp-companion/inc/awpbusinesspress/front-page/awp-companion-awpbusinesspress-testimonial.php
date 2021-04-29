<?php
$awpbusinesspress_testimonial_options = get_theme_mod('awpbusinesspress_testimonial_content');
$awpbusinesspress_testimonial_disabled = get_theme_mod('awpbusinesspress_testimonial_disabled', true); 
$awpbusinesspress_testimonial_area_title = get_theme_mod('awpbusinesspress_testimonial_area_title', __('Testimonials','awp-companion'));
$awpbusinesspress_testimonial_area_des = get_theme_mod('awpbusinesspress_testimonial_area_des', __('What our customers are saying about us after using our products.','awp-companion'));
$awpbusinesspress_testimonial_overlay_disable = get_theme_mod('awpbusinesspress_testimonial_overlay_disable', false); 
if($awpbusinesspress_testimonial_disabled == true): 
?>
<section class="section testimonial" id="testimonial-selector-scroll">	
	<div class="container">	
	     <?php if($awpbusinesspress_testimonial_area_title != null || $awpbusinesspress_testimonial_area_des != null): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="section-header">
						<?php if($awpbusinesspress_testimonial_area_des != null): ?>
						<p class="section-subtitle light"><?php echo wp_kses_post($awpbusinesspress_testimonial_area_des); ?></p>
						<?php endif; ?>
						<?php if($awpbusinesspress_testimonial_area_title != null): ?>
						<h1 class="section-title light"><?php echo wp_kses_post($awpbusinesspress_testimonial_area_title); ?></h1>
						<?php endif; ?>
						<div class="divider-line light"></div>
					</div>
				</div>
			</div>
	    <?php endif; ?>
		<div class="row">
			<?php
			$awpbusinesspress_testimonial_options = json_decode($awpbusinesspress_testimonial_options);
			if( $awpbusinesspress_testimonial_options!='' ){
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
				foreach($awpbusinesspress_testimonial_options as $testimonial_iteam){ 
					$title = ! empty( $testimonial_iteam->title ) ? $testimonial_iteam->title : '';
					$test_desc = ! empty( $testimonial_iteam->text ) ? $testimonial_iteam->text : '';
					$designation = ! empty( $testimonial_iteam->designation ) ? $testimonial_iteam->designation : ''; ?>
					    <div class="item">
							<div class="review">
								<aside class="wt-content">
									<?php if($title != null): ?>
										<h4 class="wt-title"><?php echo esc_html($title); ?></h4>
									<?php endif; ?>
									<?php if($test_desc != null): ?>
										<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
									<?php endif; ?>	
								</aside>
								<article class="client-info">
									<?php if($testimonial_iteam->image_url != null): ?>
										<figure class="client-thumbnail">
											<img src="<?php echo $testimonial_iteam->image_url; ?>" class="img-circle" alt="<?php echo esc_attr($title); ?>" >
										</figure>
									<?php endif; ?>
									<?php if($title != null): ?>
										<cite class="client-name"><?php echo esc_html($title); ?></cite>
									<?php endif; ?>
									<?php if($designation != null): ?>
										<span class="client-designation"><?php echo esc_html($designation); ?></span>
									<?php endif; ?>		
								</article>	
							</div>	
					    </div>
					<?php 
				} 
			} else { ?>		
				<div class="item">
					<div class="review">
						<aside class="wt-content">
							<h4 class="wt-title"><?php esc_html_e('Creative & Professional','awp-companion'); ?></h4>
							<p><?php esc_html_e('It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout. It vaese tam simplic quam Occidental in fact','awp-companion'); ?></p>
						</aside>
						<article class="client-info">	
							<figure class="client-thumbnail"><img src="<?php echo awp_companion_plugin_url ?>inc/awpbusinesspress/img/testimonial/1.jpg" class="img-circle" alt="testimonial"></figure> 
							<cite class="client-name"><?php esc_html_e('Mike','awp-companion'); ?></cite>
							<span class="client-designation"><?php esc_html_e('CEO & Founder','awp-companion'); ?></span>
						</article>	
					</div>
				</div>
			<?php } ?>
		</div>
	</div>		
</section>
<?php endif; ?>