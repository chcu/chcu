<?php
/*
Template Name: Kandidat
*/

add_theme_support('post-thumbnails');

$candidates = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidate',
));

while (have_posts()) {
	the_post();
	$postId = get_the_ID();

	$meta = get_post_meta($postId);

	$portraitUrl = $meta['portraitUrl'][0];
}

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="col-xs-offset-1 col-xs-10 candidateHeader" style="background-image: url('<?php echo $portraitUrl ?>');">

				<div class="candidateInfoWrapper col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10">
				<div class="candidateInfo">
					<h1>
						<?php echo $meta['firstName'][0] ?> <?php echo $meta['lastName'][0] ?>
					</h1>
					<p class="lead">
						<?php echo $meta['perex'][0] ?>
					</p>
				</div>
			</div>

			</div>
		</div>

		<div class="sectionHeader">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						Kandidátka
					</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<?php include 'includes/candidates.php' ?>
		</div>

	</div>

<?php get_footer(); ?>
