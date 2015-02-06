<?php
/*
Template Name: Homepage
*/

add_theme_support('post-thumbnails');

$manifesto = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'manifesto',
));

$programHome = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'program',
));

$programStories = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'programStory',
));
shuffle($programStories);
//$programStories = array_slice($programStories, 0, 12);


add_action( 'pre_get_posts', 'bez_denicku');

$posts = array_slice(get_posts(array(
)), 0, 3);

$postsHome = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'posts',
));

#var_dump($posts);

$candidatesHome = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidates',
));

$candidates = array_slice(get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidate',
)), 0, 14);

#var_dump($candidates);



$program = get_pages(array(
	'hierarchical' => 0,
	'meta_key'     => 'pageRole',
	'meta_value'   => 'program2014',
));


?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 col-md-offset-2 col-md-8">
				<h1>
					<span class="chcu"><span class="text">Chcu</span></span> <span class="logo"><span class="text">žít Brno</span></span>
				</h1>
			</div>
		</div>

		<?php include 'includes/nav.php' ?>

		<div class="row sectionHeader">
			<div class="col-sm-12">
				<h2>
					Zpravodajství
				</h2>
				<p class="special">
					Zprávy z magistrátu i radnice.
				</p>
			</div>
		</div>

		<?php
		$hideAuthor = true;

		include 'includes/posts.php' ?>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($postsHome[0]->ID) ?>">Starší zprávy <span class="fa fa-caret-right"></a>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<hr />
			</div>
		</div>

		<div class="row sectionHeader">
			<div class="col-sm-12">
				<h2>
					Můj milý deníčku
				</h2>
				<p class="special">
					Zápisky zastupitelů
				</p>
			</div>
		</div>

		<?php
		$hideAuthor = false;
		$showAuthorFace = true;
		remove_action( 'pre_get_posts', 'bez_denicku' );
		add_action( 'pre_get_posts', 'jen_denicky' );

		$posts = array_slice(get_posts(array(
		)), 0, 3);

		include 'includes/posts.php' ?>


		<div class="row">
			<div class="col-sm-12">
				<hr />
			</div>
		</div>

		<div class="sectionHeader">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						Vaši zastupitelé
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
					<p class="long text-center">
					</p>
				</div>
			</div>
		</div>

		<?php include 'includes/candidates.php' ?>

		
   		
   		<div class="row">
			<div class="col-sm-12">
				<hr />
			</div>
		</div>

		<?php include 'includes/programStories.php' ?>


		<div class="row sectionHeader">
			<div class="col-sm-12">
				<h2>
					Chceš?
				</h2>
				<p class="special">
					Brno jde, když se chce.
				</p>
			</div>
		</div>

		<!--
		<div class="row">
			<div class="col-sm-12">
				<hr />
			</div>
		</div>
		-->

		<!--
		<?php include 'includes/programTopics.php' ?>
		-->


		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<!--<a class="blackButton" href="<?php echo get_permalink($programHome[0]->ID) ?>">Celý program <span class="fa fa-caret-right"></a>-->
          <a class="blackButton" href="<?php echo get_permalink($program[0]) ?>">Celý černý program na bílém <span class="fa fa-caret-right"></a>
				</p>
			</div>
		</div>

	


		

		<!--
		Tohle pujde mozna za chvili zpet
		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($candidatesHome[0]->ID) ?>">Všichni zastupitelé <span class="fa fa-caret-right"></span></a>
				</p>
			</div>
		</div>
		-->

		<div class="row">
			<div class="col-sm-12">
				<hr />
			</div>
		</div>

		

		<?php include 'includes/donate.php' ?>



	</div>

	<script type="text/javascript">
		$(function(){
			var pictureSizes = {
				logo: {
					x: 709,
					y: 224,
				},
			};

			function resizeLogo() {
				var logoWidth = $('h1').width();
				var logoHeight = pictureSizes.logo.y / pictureSizes.logo.x * logoWidth;

				$('h1').css('height', logoHeight + 'px');
			}

			resizeLogo();
			$(window).resize(function(){
				resizeLogo();
			});

		});
	</script>

<?php get_footer(); ?>