<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

	public function login(){
		$this->display();
	}

	public function admin(){
		if(IS_POST){
			$name = I('name');
			$pwd = I('pwd');
			if($name == 'hello'){
				if($pwd == 'hello'){
					$_SESSION['name']=$name;
					$_SESSION['pwd']=$pwd;
					$this->success('登陆成功',U('Admin/Index/index'));
				}else{
					$this->error('密码错误');
				}
			}else{
				$this->error('账号错误');
			}
		}
	}

	public function logout(){
		$_SESSION['name']=null;
		$_SESSION['pwd']=null;
		$this->redirect('Home/Index/index');
	}
}