		<footer role="general">

			<div class="container">
				<div class="row facebook">
					<div class="col-sm-12">
						<div class="fb-like-box" data-href="https://www.facebook.com/ZitBrnoRIP" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="2000" data-height="255"></div>
					</div>
				</div>

				<?php
				$daysLeft = getDaysLeftUntilElectionEnd();
				?>

				<?php if ($daysLeft > 0) { ?>
					<div class="row callToAction">
						<div class="col-sm-12">
							<p class="shout">
								<span class="line">Lajkem neurazíš. Ale hlavně přijď volit.</span>
								<span class="line">
								<?php
								if ($daysLeft >= 5) {
									echo "Do vítězství zbývá už jen $daysLeft dní.";
								} elseif ($daysLeft >= 2 && $daysLeft <= 4) {
									echo "Do vítězství zbývají už jen $daysLeft dny.";
								} elseif ($daysLeft == 1) {
									echo "Do vítězství zbývá poslední den!";
								}
								?>
								</span>
							</p>
						</div>
					</div>
				<?php } ?>

				<div class="row">
					<div class="col-sm-12">
						<hr />
					</div>
				</div>

				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12">
						<p class="logo">
							<a href="http://www.zitbrno.cz/"><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/logo.png" alt="Žít Brno" class="img-responsive" /></a>
						</p>
						<p>
							Žít Brno je nejdelší a nejsofistikovanější politická kampaň v dějinách ČR.
							Už od roku 2011 tvoříme na základě magistrátem zadané a občany zaplacené studie kvalitní a čtený obsah.
							Tři roky jsme na magistrátní politice parazitovali a připravovali si půdu pro vstup do politiky.
							A teď přišel náš čas Žít Brno.
						</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-8">
						<h2>
							Naše projekty
						</h2>
						<ul class="links">
							<li><a href="http://www.zitbrno.cz/">www.zitbrno.cz</a>
							</li><li><a href="http://www.kartakrnana.cz/">www.kartakrnana.cz</a>
							</li><li><a href="http://www.dejchejbrno.cz/">www.dejchejbrno.cz</a>
							</li><li><a href="http://www.zitcesko.cz/">www.zitcesko.cz</a>
							</li><li><a href="http://www.machoparking.cz/">www.machoparking.cz</a>
							</li><li><a href="http://www.vyzva2013.cz/">www.vyzva2013.cz</a>
							</li><li><a href="http://www.zahoddecko.cz/">www.zahoddecko.cz</a>
							</li><li><a href="http://www.osbrneni.cz/">www.osbrneni.cz</a>
							</li><li><a href="http://www.cisteturany.cz/">www.cisteturany.cz</a>
							</li><li><a href="http://www.klidnalesna.cz/">www.klidnalesna.cz</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4">
						<h2>
							Kontakt
						</h2>
						<address>
							Zemědělská&nbsp;72<br />
							613&nbsp;00 Brno<br />
							Voliči: <a href="mailto:chcu@zitbrno.cz">chcu@zitbrno.cz</a><br />
							Média: <a href="mailto:plesl@zitbrno.cz">plesl@zitbrno.cz</a>
						</address>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<p>
							&copy; <?php echo date('Y') ?> Žít Brno
						</p>
					</div>
				</div>
			</div>

		</footer> <!-- end footer -->

		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php wp_footer(); // js scripts are inserted using this function ?>

		<script type="text/javascript" src="//use.typekit.net/jzb4lfm.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&appId=724923400862237&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<script type="text/javascript">
			$(function(){
				function onWindowResize() {
					$('.squareImagePlaceholder').each(function(){
						$(this).css('height', $(this).width() + 'px');
					});
				}

				onWindowResize();
				$(window).resize(function(){
					onWindowResize();
				});

				if (!$('body').hasClass('home')) {
					$('body').css('padding-top', $('#chcuNav').outerHeight() + 'px');
				}
			});
		</script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-493863-37', 'auto');
			ga('send', 'pageview');
		</script>

	</body>

</html>