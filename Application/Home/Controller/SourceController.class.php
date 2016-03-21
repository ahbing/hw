<?php 
namespace Home\Controller;
use Think\Controller;

class SourceController extends Controller {
	public function index() {
		$this->show('error ~~_~~');
	}
	public function getNews() {
		$news = getNews();

		$res = array();
		foreach ($news as $key => $value) {
		  $value['year'] = date('Y', $value['ctime']);
		  $value['month'] = date('m', $value['ctime']);
		  $value['day'] = date('d', $value['ctime']);
		  array_push($res, $value);
		}
		$this->ajaxReturn($res);
	}
}