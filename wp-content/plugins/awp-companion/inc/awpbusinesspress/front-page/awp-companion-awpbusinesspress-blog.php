<?php 
$awpbusinesspress_blog_disabled = get_theme_mod('awpbusinesspress_blog_disabled', true); 
$awpbusinesspress_blog_area_title = get_theme_mod('awpbusinesspress_blog_area_title', __('Latest News','awp-companion'));
$awpbusinesspress_blog_area_des = get_theme_mod('awpbusinesspress_blog_area_des', __('Stay updated with the latest news by reading our articles written by content writers in the industry.','awp-companion'));
$awpbusinesspress_home_blog_meta_disabled = get_theme_mod('awpbusinesspress_home_blog_meta_disabled', true);
$awpbusinesspress_theme_blog_category = get_theme_mod('awpbusinesspress_theme_blog_category');
if($awpbusinesspress_blog_disabled == true): ?>
	<section id="blog-selector-scroll" class="section blog home-news theme-grey">
		<div class="container">
			<?php if($awpbusinesspress_blog_area_title != null || $awpbusinesspress_blog_area_des != null): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="section-header">
							<?php if($awpbusinesspress_blog_area_des){ ?>
								<p class="section-subtitle"><?php echo wp_kses_post($awpbusinesspress_blog_area_des); ?></p>
							<?php } if($awpbusinesspress_blog_area_title){ ?>
								<h1 class="section-title"><?php echo wp_kses_post($awpbusinesspress_blog_area_title); ?></h1>
							<?php } ?>
							<div class="divider-line"></div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="row">
				<?php
				$post_args = array( 'post_type'	=> 'post', 'posts_per_page'	=> 3,
				'category__in'	=> $awpbusinesspress_theme_blog_category, 'post__not_in'		=>get_option("sticky_posts")) ;
				query_posts( $post_args );
				if(query_posts( $post_args )){	
					while(have_posts()):the_post(); { ?>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<article class="post">	
								<div class="entry-meta">
									<span class="entry-date">
										<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>">
											<time datetime=""><?php echo esc_html(get_the_date('M j, Y')); ?></time>
										</a>
									</span>
									<span class="byline"><?php esc_html_e('By','awp-companion'); ?>
										<span class="author vcard">
											<a class="url fn n" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><?php echo esc_html(get_the_author());?></a>	
										</span>
									</span>
									<?php $category_data = get_the_category_list( esc_html__( '  ', 'awp-companion' ) );
										if(!empty($category_data)) {
										echo '<span class="cat-links">' . $category_data . '</span>';
										} ?>
								</div>	
								<header class="entry-header">		
									<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>	
								</header>
								<?php if(has_post_thumbnail()): ?>						
									<figure class="post-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large','');?></a>
									</figure>
								<?php endif; ?>
								<div class="entry-content">
									<?php the_excerpt(); ?>
									<p><a href="<?php the_permalink(); ?>" class="more-link"><?php _e('Read More','awp-companion'); ?></a></p>
								</div>
							</article>
						</div><?php 
					} endwhile; 
				} ?>
			</div>
		</div>
	</section>
<?php endif; ?>