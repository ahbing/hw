<?php 

function video() {
	$db_video = M('video');
	$result = $db_video->where(array(
			'usable' => 1
		))->limit(1)->select();

	return $result[0];
}

function getNews() {
	$db_news = M('news');
	$result = $db_news->select();

	return $result;
}