<?php
$quiz_id     = 7;
$entry_metas = array(
	array(
		'name'  => 'text-1',
		'value' => 'Text Input Value',
	),
	array(
		'name'  => 'text-1',
		'value' => 'Text Input Value',
	),
);
Forminator_API::add_quiz_entries( $quiz_id, $entry_metas );