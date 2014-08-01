<?php
/*
Template Name: BodProgramu
*/

add_theme_support('post-thumbnails');

while (have_posts()) {
	the_post();
}

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="col-xs-12">
				<?php echo the_content() ?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
