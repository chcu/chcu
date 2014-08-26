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
					<?php if ($meta['perex'][0]) { ?>
						<p class="perex">
							<?php echo $meta['perex'][0] ?>
						</p>
					<?php } ?>
				</div>
			</li>
		<?php } ?>
	</ul>

	<script type="text/javascript">
		var resizeProgramStories = function() {
			Array.prototype.max = function() {
				return Math.max.apply(null, this);
			};

			var heights = [];
			$('.programStories li').each(function(){
				$(this).css('height', 'auto');
				heights.push($(this).innerHeight());
			});

			$('.programStories li').css('height', heights.max() + 'px');
			$('.programStories li div[data-topic]').css('height', '100%');

			$('html').delegate('.programStories li', 'click', function(event) {
				document.location.href = $(this).find('a').attr('href');
			});
		}

		resizeProgramStories();
		$(window).resize(function(){
			resizeProgramStories();
		});
	</script>
</div>
