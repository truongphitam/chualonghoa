<?php get_header(); ?>
<section id="product-12" class="clearfix">
	<div class="container">
		<p>
			Từ khóa: <strong><?php echo $_GET['s']; ?></strong>
		</p>
		<div class="row">
			<?php
			$search = $_GET['s'];
			$wpb_all_query = new WP_Query(array(
				'post_type'		=> 'post',
				'post_status'	=> 'publish',
				'posts_per_page'=> -1,
				'order' 		=> 'DESC',
				's'				=> $search
			));
			?>
			<?php if ( $wpb_all_query->have_posts() ) : ?>
				<?php $i=1; while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<?php
				$price = get_field('price');
				$price_discount = get_field('price_discount');
				$discount_percent = round( ( $price - $price_discount ) / $price * 100 );
				?>
				<div class="col-xs-6 col-md-3">
					<div class="product-box">
						<a href="<?php the_permalink(); ?>">
							<div class="product-img">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
								<strong class="product-discount">
									-<span data-count-from="0" data-count-to="<?php echo $discount_percent; ?>" data-count-speed="25" class="number-counter"><?php echo $discount_percent; ?></span> %
								</strong>
							</div>
							<div class="product-title">
								<strong><?php the_title(); ?></strong>
							</div>
							<div class="product-price">
								<p class="product-price1">
									<strong><?php echo formatMoney($price_discount); ?> vnđ/m2</strong>
								</p>
								<p class="product-price2">
									<?php echo formatMoney($price); ?> vnđ/m2
								</p>
							</div>
						</a>
					</div>
				</div>
				<?php if($i%4==0): ?>
					<!-- <div class="clearfix"></div> -->
				<?php endif; ?>
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