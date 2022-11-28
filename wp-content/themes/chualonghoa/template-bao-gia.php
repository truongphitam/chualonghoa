<?php
/*
Template Name: Báo giá
*/
get_header();
global $maxthemes;
?>

<section id="home-about" class="clearfix padding-50">
	<div class="container">
		<h3 class="c_06BBE3 text-center">
			<strong>
				BÁO GIÁ
			</strong>
		</h3>
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<?php echo do_shortcode('[contact-form-7 id="41" title="Form báo giá"]'); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>