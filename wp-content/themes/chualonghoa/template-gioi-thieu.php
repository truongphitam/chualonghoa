<?php
/*
Template Name: Giới thiệu
*/
get_header();
global $maxthemes;
?>

<section id="home-about" class="clearfix padding-50">
	<div class="container">
		<div class="row valign-center-lg">
			<div class="col-xs-12 col-md-7">
				<h3 class="c_06BBE3">
					<strong>
						GIỚI THIỆU
					</strong>
				</h3>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
					<div class="text-justify">
						<?php the_content(); ?>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
		<div class="col-xs-12 col-md-5">
			<img src="/wp-content/uploads/2020/12/1.jpg" class="img-responsive" style="object-fit: cover">
		</div>
	</div>
</div>
</section>

<?php
get_footer();
?>