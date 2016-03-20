<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $this->assign('video', video());
      if(isMobile()){
         ipCount(0);
         $this->display('mobile/index/index');
      }else{
         ipCount(1);
         $this->display('web/index');
      }
    }

    public function join(){
      if(IS_POST){
        $data = array(
            'name' => I('name'),
            'sex' => I('sex'),
            'college' => I('college'),
            'number' => I('number'),
            'tel' => I('tel'),
            'department' => I('department'),
            'intro' => I('intro'),
            'time' => time(),
            'ip' => get_client_ip(),
        );
        $Apply = D("Apply");
        if($Apply->create($data)){
            if($Apply->add())
              $this->success('报名成功',U('Index/join'),3);
              //echo "<script>alert('报名成功');</script>";
            else
              $this->error('错误请重试',U('Index/join'),3);
         }else{
            $this->error($Apply->getError());
         }
      }else{
        if(isMobile()){
           $this->display('mobile/join/join');
        }else{
           $this->display('web/index');
        }
      }
    }

    public function news(){
      $news = getNews();

      $res = array();
      foreach ($news as $key => $value) {
        $value['year'] = date('Y', $value['ctime']);
        $value['month'] = date('m', $value['ctime']);
        $value['day'] = date('d', $value['ctime']);
        array_push($res, $value);
      }
      $this->assign('news', $res);
      echo '<pre>';

      var_dump(json_encode($res));

      echo '</pre>';
      exit(0);
      if(isMobile()) {
        $this->display('mobile/news/news');
      } else {
        $this->display('web/index');
      }
      
    }

    public function intro(){
      $intro = M("intro");
      $content = M("intro")->select();

      $departList = array();
      foreach ($content as $key => $value) {
        $isParent = empty($value[tid]);
        if($isParent) {
          $tmp = array();
          $id = $value['id'];
          $childs = $intro->where(array('tid'=>$id))->select();
          $value['child']  = $childs;
          array_push($departList, $value);
        }
      }
      $this->assign('departList', $departList);
      if(isMobile()){
         $this->display('mobile/intro/intro');
      }else{
         $this->display('web/index');
      }
    }


}