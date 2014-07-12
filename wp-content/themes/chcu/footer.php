		<footer role="contentinfo">

			<div id="inner-footer" class="clearfix">

				<nav class="clearfix">
					<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>

				<p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>

				<p class="attribution">&copy; <?php bloginfo('name'); ?></p>

			</div> <!-- end #inner-footer -->

		</footer> <!-- end footer -->

		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php wp_footer(); // js scripts are inserted using this function ?>

		<script type="text/javascript" src="//use.typekit.net/jzb4lfm.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	</body>

</html>