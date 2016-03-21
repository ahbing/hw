<?php
namespace Admin\Controller;
use Think\Controller;
class ApplyController extends CommonController {

	public function apply($page=1){
		// $page = I('get.page');
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

	public function delete() {
		$uid = I('get.sn');
		$db_apply = M('apply');
		$res = $db_apply->where(array('uid'=>$uid))->delete();
		if($res) {
			$this->success('删除成功！', U('admin/apply/apply'),2);
		}else{
			$this->error('删除失败!', U('admin/apply/apply'), 2);
		}
	}


}