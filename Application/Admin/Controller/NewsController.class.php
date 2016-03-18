<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {

	public function publish(){
		if(IS_POST){
			$config = array(
			    'maxSize'    =>    3145728,
			    'rootPath'   =>    './Uploads/',
			    'savePath'   =>    '',
			    'saveName'   =>    array('uniqid',''),
			    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
			    'autoSub'    =>    true,
			    'subName'    =>    array('date','Ymd'),
			);
			$upload = new \Think\Upload($config);// 实例化上传类
			$info = $upload->upload();
			if(!$info) { //上传错误
				$this->error($upload->getError());
			}else{
				$data = array(
					'img' => $config['rootPath'].$info['pic']['savepath'].$info['pic']['savename'],
					'title' => I('post.title'),
					'url'	=> I('post.url'),
					'ctime'	=> time()
				);

				$db_news = M('news');
				$res = $db_news->add($data);
			}
			redirect('/Admin/news/newslist');
		}
		$this->display();
	}

	public function newslist(){
		$db_new = M('news');
		$news = $db_new->select();
		$res = array();
		foreach ($news as $key => $value) {
			$value['ctime'] = date('d/m/Y', $value['ctime']);
			array_push($res, $value);
		}
		$this->assign('news', $res);
		$this->display();
	}


	public function edit(){
		if(!IS_POST)redirect('Home/index/index');

	}

	public function delete(){
		if(!IS_GET){
			redirect('/home/index/index');
		}else{ 
			$id = I('get.sn');
			$db_news = M('news');
			$newsdetail = $db_news->where(array('id'=>$id))->select();
			$res = $db_news->where(array('id'=>$id))->delete();
			$file = $newsdetail[0]['img'];
			if(file_exists($file)){
				$result = @unlink($file);
			}
			redirect('/Admin/news/newslist');
			
		}
	}
}