<?php

$program = get_pages(array(
	'hierarchical' => 0,
	'meta_key'     => 'pageRole',
	'meta_value'   => 'program2014',
));

?>

<div class="row">
	<div class="col-xs-12">
		<p class="text-center">
			<a class="blackButton" href="<?php echo get_permalink($program[0]) ?>">Celý černý program na bílém <span class="fa fa-caret-right"></a>
		</p>
	</div>
</div>
