<div class="kolo">

	<div class="row">
		<div class="col-sm-12">
			<div class="background">
				<table class="container">
					<tr>
						<td class="valign">
							<form action="http://zitbrno.us9.list-manage1.com/subscribe?u=f43e55b146b360b0ac7653baf&id=c4f16f0d68" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<h2>To chceš!</h2>
								<table class="inputs">
									<tr>
										<td><input type="email" value="" name="EMAIL" placeholder="tvujhlas@volic.cz" /></td><td><button type="submit" class="button">Chcu!</button></td>
									</tr>
								</table>
								<p class="hidden-xs">
									Dej nám svůj mail. Budeme ti posílat nejlepší akce a slevy na volby ZDARMA!
								</p>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="row visible-xs">
		<div class="col-xs-12">
			<p class="text-center">
				Dej nám svůj mail. Budeme ti posílat nejlepší akce a slevy na volby ZDARMA!
			</p>
		</div>
	</div>

</div>

<script type="text/javascript">
	$(function(){
		var koloSize = {
			x: 857,
			y: 855,
		};

		function resizeKolo() {
			if ($('.kolo .background').innerWidth() >= koloSize.x) {
				$('.kolo .background').css('height', koloSize.y + 'px');
			} else {
				$('.kolo .background').css('height', (koloSize.y * ($('.kolo .background').innerWidth() / koloSize.x)) + 'px');
			}

			$('.kolo .container td.valign').css('height', $('.kolo .background').innerHeight() + 'px');
		}

		resizeKolo();
		$(window).resize(function(){
			resizeKolo();
		});
	});
</script>
