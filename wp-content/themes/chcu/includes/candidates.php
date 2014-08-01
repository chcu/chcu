<ul class="candidates">
	<?php foreach ($candidates as $candidate) { ?>
		<?php
		preg_match('#src="(.+)"#U', get_the_post_thumbnail($candidate->ID, 'candidate-thumb'), $match);
		$meta = get_post_meta($candidate->ID);
		?>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
			<p class="image">
				<a class="img" href="<?php echo get_permalink($candidate) ?>"><?php
				if ($match[1]) {
					echo '<img src="' . $match[1] . '" class="img-responsive img-circle" />';
				} else {
					echo '<span class="squareImagePlaceholder img-responsive img-circle" />';
				}
				?></a>
			</p>
			<h3 class="name">
				<a href="<?php echo get_permalink($candidate) ?>"><span class="firstName"><?php echo $meta['firstName'][0] ?></span> <span class="lastName"><?php echo $meta['lastName'][0] ?></span></a>
			</h3>
			<p class="occupation">
				<?php echo $meta['occupation'][0] ?>
			</p>
		</li>
	<?php } ?>
</ul>

<script type="text/javascript">
	var resizeCandidates = function() {
		Array.prototype.max = function() {
			return Math.max.apply(null, this);
		};

		var heights = [];
		$('.candidates li').each(function(){
			$(this).css('height', 'auto');
			heights.push($(this).innerHeight());
		});

		$('.candidates li').css('height', heights.max() + 'px');
	}

	resizeCandidates();
	$(window).resize(function(){
		resizeCandidates();
	});
</script>
