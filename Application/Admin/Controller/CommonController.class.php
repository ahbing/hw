<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function _initialize(){
		if($_SESSION['name'] != 'hello' || $_SESSION['pwd'] != 'hello'){
		$this->redirect('Admin/User/login');
		}
	}
}