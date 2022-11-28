<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<div class="container" style="padding: 15px">
		<h1 class="text-center">
			<?php the_title(); ?>
		</h1>
		<?php
		the_content();
		?>
	</div>
	<?php
endwhile;
endif;
?>
<?php get_footer(); ?>