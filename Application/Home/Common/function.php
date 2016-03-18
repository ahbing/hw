<?php 

function video() {
	$DB_Video = M('video');
	$result = $DB_Video->where(array(
			'usable' => 1
		))->select();

	return $result[0];
}