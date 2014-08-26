<div class="row topics">
	<div class="col-sm-12">
		<h3>
			Chcu
		</h3>
		<ul>
			<?php foreach (array(
				'pohyb'    => 'pohyb',
				'domov'    => 'domov',
				'kultura'  => 'kulturu',
				'ferhra'   => 'fér hru',
				'vzdelani' => 'vzdělání',
				'bydleni'  => 'bydlení',
				'zdravi'   => 'zdraví',
			) as $key => $label) { ?>
				<li><a data-topic="<?php echo $key ?>" href="<?php echo get_permalink($programHome[0]->ID) ?>?tema=<?php echo $key ?>"><?php echo $label ?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
