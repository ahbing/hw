<?php
namespace Admin\Controller;
use Think\Controller;
class ProduceController extends CommonController {

	public function publish(){
		$this->display();
	}

	public function producelist(){
		$this->display();
	}

	public function edit(){
		if(!IS_POST)redirect('home/index/index');

	}

	public function delete(){
		if(!IS_POST)redirect('home/index/index');
	}
}