<div id="chcuNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<span class="navbar-brand-container">
				<a class="navbar-brand" title="Chcu Žít Brno" href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/images/chcu.png" /></a>
			</span>
		</div>

		<div class="collapse navbar-collapse navbar-responsive-collapse">
			<?php wp_bootstrap_main_nav() ?>
		</div>

	</div>
</div>
