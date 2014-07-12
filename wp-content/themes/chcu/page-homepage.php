<?php
/*
Template Name: Homepage
*/

add_theme_support('post-thumbnails');

$manifest = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'manifest',
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

#var_dump($posts);

$candidatesHome = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidates',
));

$candidates = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidate',
));

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
				<p>
					<a class="rainbowButton biggerButton roundedButton" href="<?php echo get_permalink($manifest[0]->ID) ?>">Číst duhový manifest <span class="fa fa-caret-right"></a>
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
					<li><a data-topic="doprava" href="">dopravu</a></li>
					<li><a data-topic="skolstvi" href="">školství</a></li>
					<li><a data-topic="dychani" href="">dýchání</a></li>
					<li><a data-topic="doprava" href="">podnikání</a></li>
					<li><a data-topic="doprava" href="">transparentnost</a></li>
					<li><a data-topic="doprava" href="">turismus</a></li>
					<li><a data-topic="doprava" href="">kulturu</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<ul class="programStories">
				<?php foreach ($programStories as $programStory) { ?>
					<?php
					$meta = get_post_meta($programStory->ID);
					?>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div data-topic="<?php echo $meta['topic'][0] ?>">
							<p class="title">
								<a href="<?php echo get_permalink($programStory) ?>"><?php echo $programStory->post_title ?></a>
							</p>
							<p class="perex">
								<?php echo $meta['perex'][0] ?>
							</p>
						</div>
					</li>
				<?php } ?>
			</ul>
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
					<a class="blackButton" href="">Starší zprávy <span class="fa fa-caret-right"></a>
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

	</div>

	<script type="text/javascript">
		$(function(){
			var pictureSizes = {
				chcu: {
					x: 2009,
					y: 498,
				},
				logo: {
					x: 3750,
					y: 486,
				},
			};

			function resizeLogo() {
				var chcuWidth = $('h1 .chcu').width();
				var chcuHeight = pictureSizes.chcu.y / pictureSizes.chcu.x * chcuWidth;

				var logoWidth = $('h1 .logo').width();
				var logoHeight = pictureSizes.logo.y / pictureSizes.logo.x * logoWidth;

				$('h1 .chcu').css('height', (chcuHeight) + 'px');
				$('h1 .logo').css('height', logoHeight + 'px');
			}

			resizeLogo();
			$(window).resize(function(){
				resizeLogo();
			});

		});
	</script>

<?php get_footer(); ?>