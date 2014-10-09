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
)), 0, 12);

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

		<div class="row">
			<div class="col-xs-12 text-center">
				<iframe width="853" height="480" src="//www.youtube.com/embed/TS4VSgsysug" frameborder="0" allowfullscreen style="max-width: 100%;"></iframe>
			</div>
		</div>

		<div class="row sectionHeader">
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
				<p class="shout">
					Jak pomoct městu, které si nechce nechat pomoct?
				</p>
				<p class="long text-center">
					Jde nám o život. O život v Brně.
				</p>
				<p class="long text-center">
					Tři roky kritizujeme brněnský magistrát. Tři roky si klepeme na čelo, protáčíme panenky, vyprskáváme smíchy a klademe hlavy do dlaní. Tři roky nám říkají, že posmívat se umí každý, ale vládnout můžou jen vyvolení. Jenže my dobře víme, že politikem se člověk nerodí, ale stává.  My na to máme právě teď.
				</p>
				<p class="manifestoButtonContainer">
					<a href="<?php echo get_permalink($manifesto[0]->ID) ?>">ČTĚTE PROČ ŽÍT BRNO &#9654;</a>
				</p>
			</div>
		</div>

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

		<?php include 'includes/programStories.php' ?>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<!--<a class="blackButton" href="<?php echo get_permalink($programHome[0]->ID) ?>">Celý program <span class="fa fa-caret-right"></a>-->
          <a class="blackButton" href="<?php echo get_permalink($program[0]) ?>">Celý černý program na bílém <span class="fa fa-caret-right"></a>
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
					Propaganda
				</h2>
				<p class="special">
					Volby jde vyhrát i bez peněz a kmotrů. Jsme aktivisti, makáme.
				</p>
			</div>
		</div>

		<?php include 'includes/posts.php' ?>

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

		<div class="sectionHeader">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						A vy jste kdo?
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
					<p class="long text-center">
						Jsme populisti, slušní lidé, aktivisti, flákači a tvrdě pracující, důchodci, cikáni, architekti a matky, programátoři, gayové, intelektuálové a kritici, pragmatici, pacienti, trapáci, slušní občané a rebelové. Dělejte si z nás legraci, rýpejte do nás, pomlouvejte za zády a do novin. My to ustojíme. A budeme vás poslouchat.
					</p>
				</div>
			</div>
		</div>

		<?php include 'includes/candidates.php' ?>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($candidatesHome[0]->ID) ?>">Celá kandidátka <span class="fa fa-caret-right"></span></a>
				</p>
			</div>
		</div>

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

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