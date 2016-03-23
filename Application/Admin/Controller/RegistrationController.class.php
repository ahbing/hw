<?php
namespace Admin\Controller;
use Think\Controller;
class RegistrationController extends CommonController {

	public function registration(){
		$apply = M('apply')->order('signup_time ASC')->limit($limit)->select();
		$this->assign('apply', $apply);
		$this->display();
	}


}