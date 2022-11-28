<?php
/*
Template Name: Liên hệ
*/
get_header();
global $maxthemes;
?>

<section id="home-about" class="clearfix padding-50">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<h3 class="c_06BBE3">
					<strong>
						LIÊN HỆ
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
		<div class="col-xs-12 col-md-6">
			<?php echo do_shortcode('[contact-form-7 id="5" title="Form liên hệ"]'); ?>
		</div>
	</div>
</div>
</section>

<?php
get_footer();
?>