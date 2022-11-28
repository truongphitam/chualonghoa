<?php
get_header();
global $maxthemes;
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<div id="single">
		<div class="container">
			<h1 class="text-center">
				<?php the_title(); ?>
			</h1>
			<p class="text-center">
				<small>( <?php echo get_the_date('d-m-Y'); ?> )</small>
			</p>
			<div class="padding-15 text-justify">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php
endwhile;
endif;
?>



<section id="product-orther" class="clearfix">
	<div class="container">
		<h3 class="text-center c_06BBE3">
			<strong>Tin tức</strong>
		</h3>
		<div class="slider-orther">
			<?php
			$wpb_all_query = new WP_Query(array(
				'post_type'		=> 'post',
				'post_status'	=> 'publish',
				'posts_per_page'=> 3,
				'order' 		=> 'DESC',
			));
			?>
			<?php if ( $wpb_all_query->have_posts() ) : ?>
				<?php $i=1; while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<div class="clearfix">
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
				$i++;
			endwhile;
			wp_reset_postdata(); 
		endif;
		?>
	</div>
</div>
</section>


<?php
get_footer();
?>