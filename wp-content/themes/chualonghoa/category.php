<?php get_header(); ?>
<section id="home-news" class="clearfix padding-50">
	<div class="container">
		<h3 class="c_06BBE3 text-center">
			<strong>
				TIN TỨC
			</strong>
		</h3>
		<div class="row">
			<?php
			$wpb_all_query = new WP_Query(array(
				'post_type'		=> 'post',
				'post_status'	=> 'publish',
				'posts_per_page'=> -1,
				'order' 		=> 'DESC',
				'paged'	=>	$paged,
			));
			?>
			<?php if ( $wpb_all_query->have_posts() ) : ?>
				<?php $i=1; while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<div class="col-xs-12 col-md-4">
					<div class="product-box effects">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<div class="product-img">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>" alt="STRIPE BORDER (STB)" style="height: 250px;object-fit: cover">
							</div>
							<div class="product-title">
								<strong>
									<?php the_title(); ?>
								</strong>
							</div>
							<div class="product-price">
								<p class="product-price1">
									Chi tiết
								</p>
							</div>
						</a>
					</div>
				</div>
				<?php
				echo ($i%3==0) ? '<div class="clearfix"></div>' : '';
				?>
				<?php
				$i++;
			endwhile;
			wp_reset_postdata(); 
		endif;
		?>
	</div>
</div>
</section>
<?php get_footer(); ?>