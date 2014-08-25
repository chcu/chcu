<?php
/*
Template Name: Program
*/

add_theme_support('post-thumbnails');

$programStories = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'programStory',
));

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Program
				</h1>
				<p class="lead">
					Co chceš ty a co chceme my.
				</p>
			</div>
		</div>

		<div class="row">
			<?php include 'includes/programStories.php' ?>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" target="_blank" href="https://docs.google.com/document/d/1eX_iXNyVadFlYYRr-mBNaq5ElTHmb2Xz8FQfWOopk5U/edit">Celý černý program na bílém <span class="fa fa-caret-right"></a>
				</p>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
