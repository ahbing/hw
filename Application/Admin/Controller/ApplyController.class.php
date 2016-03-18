<?php
namespace Admin\Controller;
use Think\Controller;
class ApplyController extends CommonController {

	public function apply($page=1){
		$pagesize = 10; //每页几条
		$num = M('Apply')->count(); //报名人数
		$num = ceil($num/$pagesize); //页数

		if($page>$num){
			$page = 1;
		}

		$apply = M('Apply')->order('time ASC')->page($page,$pagesize)->select();

		$this->assign('apply', $apply);
		$this->assign('page',$page);
		$this->assign('num',$num);
		$this->display();
	}


}