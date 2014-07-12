<?php
/*
Template Name: Homepage
*/

add_theme_support('post-thumbnails');

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
			<div class="sectionHeader">
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
						<a href="">Číst duhový manifest</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="sectionHeader">
				<div class="col-sm-12">
					<h2>
						Chceš?
					</h2>
					<p class="special">
						Brno jde, když se chce.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<h3>
				Chcu
			</h3>
			<ul>
				<li><a href="">dopravu</a></li>
				<li><a href="">školství</a></li>
				<li><a href="">dýchání</a></li>
				<li><a href="">podnikání</a></li>
				<li><a href="">transparentnost</a></li>
				<li><a href="">turismus</a></li>
				<li><a href="">kulturu</a></li>
			</ul>
		</div>
		<ul class="row programStories">
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
		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($programHome[0]->ID) ?>">celý program <span class="fa fa-caret-right"></a>
				</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="sectionHeader">
				<div class="col-sm-12">
					<h2>
						Propaganda
					</h2>
					<p class="special">
						Volby jde vyhrát i bez peněz a kmotrů. Jsme aktivisti, makáme.
					</p>
				</div>
			</div>
		</div>
		<ul class="row posts">
			<?php foreach ($posts as $post) { ?>
				<?php
				preg_match('#src="(.+)"#U', get_the_post_thumbnail($post->ID, 'post-thumb'), $match);
				$meta = get_post_meta($post->ID);
				?>
				<li class="clearfix">
					<div class="image col-lg-3 col-md-3 col-sm-5 col-xs-12">
						<p>
							<a href="<?php echo get_permalink($post) ?>"><img src="<?php echo $match[1] ?>" class="img-responsive" /></a>
						</p>
					</div>
					<div class="content col-lg-9 col-md-9 col-sm-7 col-xs-12">
						<h3 class="title">
							<a href="<?php echo get_permalink($post) ?>"><?php echo $post->post_title ?></a>
						</h3>
						<p class="perex">
							<?php echo $meta['perex'][0] ?>
						</p>
					</div>
					<div class="clearfix"></div>
				</li>
			<?php } ?>
		</ul>
		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="">starší zprávy <span class="fa fa-caret-right"></a>
				</p>
			</div>
		</div>
	</div>

	<div class="container">
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
		<ul class="row candidates">
			<?php foreach ($candidates as $candidate) { ?>
				<?php
				preg_match('#src="(.+)"#U', get_the_post_thumbnail($candidate->ID, 'candidate-thumb'), $match);
				$meta = get_post_meta($candidate->ID);
				?>
				<li class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
					<p class="image">
						<a href="<?php echo get_permalink($candidate) ?>"><img src="<?php echo $match[1] ?>" class="img-responsive img-circle" /></a>
					</p>
					<h3 class="name">
						<a href="<?php echo get_permalink($candidate) ?>"><?php echo $candidate->post_title ?></a>
					</h3>
					<p class="occupation">
						<?php echo $meta['occupation'][0] ?>
					</p>
				</li>
			<?php } ?>
		</ul>
		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($candidatesHome[0]->ID) ?>">celá kandidátka <span class="fa fa-caret-right"></span></a>
				</p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>