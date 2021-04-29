<?php 
$awpbusinesspress_service_area_disabled = get_theme_mod('awpbusinesspress_service_area_disabled', true);
$awpbusinesspress_service_content  = get_theme_mod( 'awpbusinesspress_service_content');
$awpbusinesspress_service_area_title = get_theme_mod('awpbusinesspress_service_area_title', __('Our Services','awp-companion'));
$awpbusinesspress_service_area_des = get_theme_mod('awpbusinesspress_service_area_des', __('We provide the worlds best consulting related services to growth your business.','awp-companion'));
if($awpbusinesspress_service_area_disabled == true): ?>
<section id="service-selector-scroll" class="section service theme-grey service-one">
	<div class="container">
		<?php  
		if( ($awpbusinesspress_service_area_title) || ($awpbusinesspress_service_area_des)!='' ): ?>
			<!-- Section Title -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-header">
							<?php if($awpbusinesspress_service_area_des != null): ?>
								<p class="section-subtitle"><?php echo wp_kses_post($awpbusinesspress_service_area_des); ?></p>
							<?php endif; ?>				
							<?php if($awpbusinesspress_service_area_title != null): ?>
							<h1 class="section-title"><?php echo wp_kses_post($awpbusinesspress_service_area_title); ?></h1>
							<?php endif; ?>
							<div class="divider-line"></div>
						</div>
					</div>
				</div>
			<!-- /Section Title -->
		<?php endif; ?>
		<div class="row">
			<?php
			if ( ! empty( $awpbusinesspress_service_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
				$awpbusinesspress_service_content = json_decode( $awpbusinesspress_service_content );
				foreach ( $awpbusinesspress_service_content as $features_item ) {
					$icon = ! empty( $features_item->icon_value ) ? $features_item->icon_value : '';
					$title = ! empty( $features_item->title ) ? $features_item->title : '';
					$text = ! empty( $features_item->text ) ? $features_item->text : '';
					$link = ! empty( $features_item->link ) ? $features_item->link : '';
					$image = ! empty( $features_item->image_url ) ? $features_item->image_url : '';
					$open_new_tab = $features_item->open_new_tab;
					?>
					<div class="col-lg-4 col-md-6 col-sm-12 service-box">			
						<article class="post text-center">
							<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
									<?php if ( ! empty( $image ) ) : ?>
									<div class="service-icon">
										<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
											   <img class="" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
											</a>
										<?php endif; ?>	
										<?php if ( empty( $link ) ) : ?>	
												<img class="" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
										<?php endif; ?>	
									</div>								
									<?php endif; ?>
							<?php } else if($features_item->choice =='customizer_repeater_icon'){ ?>
									<?php if ( ! empty( $icon ) ) :?>
										<div class="service-icon">
											<?php if ( ! empty( $link ) ) : ?>
												<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
													<i class="fa <?php echo esc_html( $icon ); ?>"></i>
												</a>
											<?php endif; ?>
											<?php if ( empty( $link ) ) : ?>
												<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
											<?php endif; ?>
										</div>
									<?php endif; ?>
							<?php } ?>
							<?php if ( ! empty( $title ) ) : 
								if(empty($link)){ ?>
									<h4 class="entry-title"><?php echo esc_html( $title ); ?></h4><?php
								}else{
										?>
									<h4 class="entry-title">
										<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a>
									</h4><?php
								}
							endif; ?>
							<div class="entry-content">
								<?php if ( ! empty( $text ) ) : //text ?>
									<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
								<?php  endif; ?>
								<?php if ( ! empty( $button_text ) ) : ?>
									<p>
									<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes') { echo "target='_blank'"; } ?>class="more-link"><?php echo esc_html( $button_text ); ?></a>
									</p>
								<?php  endif; ?>
							</div>
						</article>
					</div><?php
				} 
			} else { ?>
					<div class="col-md-4 col-sm-6 col-xs-12 service-box">
						<article class="post text-center">
							<div class="service-icon"><i class="fa fa-mobile"></i></div>
							<div class="entry-header">
								<h4 class="entry-title"><a href="#"><?php esc_html_e('Responsive Design','awp-companion'); ?></a></h4>
							</div>		
							<div class="entry-content">
								<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quos cupid.','awp-companion'); ?></p>						
								<p><a href="#" class="more-link"><?php esc_html_e('READ MORE','awp-companion'); ?></a></p>		
							</div>
						</article> 
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 service-box">
						<article class="post text-center">
							<div class="service-icon"><i class="fa fa-cogs"></i></div>
							<div class="entry-header"><h4 class="entry-title"><a href="#"><?php esc_html_e('Easy to Customize','awpbusinesspress'); ?></a></h4></div>		
							<div class="entry-content">
								<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quos cupid.','awpbusinesspress'); ?></p>
								<p><a href="#" class="more-link"><?php esc_html_e('READ MORE','awpbusinesspress'); ?></a></p>		
							</div>
						</article> 
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 service-box">
						<article class="post text-center">
							<div class="service-icon"><i class="fa fa-handshake-o"></i></div>
							<div class="entry-header"><h4 class="entry-title"><a href="#"><?php esc_html_e('Great Support','awp-companion'); ?></a></h4></div>
							<div class="entry-content">
								<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quos cupid.','awp-companion'); ?></p>
								<p><a href="#" class="more-link"><?php esc_html_e('READ MORE','awp-companion'); ?></a></p>
							</div>
						</article> 
					</div><?php	
			} ?>
		</div>
	</div>
</section>
<?php endif; ?>