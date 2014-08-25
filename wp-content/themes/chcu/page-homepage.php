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

$posts = get_posts(array(

));

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

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
				<h1>
					<span class="chcu"><span class="text">Chcu</span></span> <span class="logo"><span class="text">žít Brno</span></span>
				</h1>
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
					<a href="<?php echo get_permalink($manifesto[0]->ID) ?>"><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/manifesto_link.png" /></a>
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

		<div class="row">
			<div class="col-sm-12">
				<hr />
			</div>
		</div>

		<div class="row topics">
			<div class="col-sm-12">
				<h3>
					Chcu
				</h3>
				<ul>
					<li><a data-topic="pohyb" href="">pohyb</a></li>
					<li><a data-topic="domov" href="">domov</a></li>
					<li><a data-topic="kultura" href="">kulturu</a></li>
					<li><a data-topic="ferhra" href="">fér hru</a></li>
					<li><a data-topic="vzdelani" href="">vzdělání</a></li>
					<li><a data-topic="bydleni" href="">bydlení</a></li>
					<li><a data-topic="zdravi" href="">zdraví</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<?php include 'includes/programStories.php' ?>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($programHome[0]->ID) ?>">Celý program <span class="fa fa-caret-right"></a>
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

		<div class="row">
			<?php include 'includes/posts.php' ?>
		</div>

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

		<div class="row">
			<?php include 'includes/candidates.php' ?>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($candidatesHome[0]->ID) ?>">Celá kandidátka <span class="fa fa-caret-right"></span></a>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="kolo">

				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript">
		$(function(){
			var pictureSizes = {
				logo: {
					x: 575,
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