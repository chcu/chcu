<?php
/*
Template Name: CelyProgram
*/

add_theme_support('post-thumbnails');

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Program Žít Brno 2014
				</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 longCopy">
				<?php while (have_posts()) {
					the_post();
					the_content();
				} ?>
			</div>
		</div>

		<script type="text/javascript">
			$(function(){
				$('html').delegate('ol a', 'click', function(event){
					event.preventDefault();
					var segment = $(this).attr('data-segment');
					$('html, body').animate({
						scrollTop: $('[name="' + segment + '"]').offset().top - $('#chcuNav').outerHeight(),
					}, 750);

				});
			});
		</script>

		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
