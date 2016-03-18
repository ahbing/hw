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
              $this->success('报名成功',U('Index/join'));
              //echo "<script>alert('报名成功');</script>";
            else
              $this->error('错误请重试',U('Index/join'));
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
      $this->display('mobile/news/news');
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
      // var_dump($departList);
      // exit();
      // $departList = array(
      //     array(
      //         'name'  => '行政部',
      //         'child' => array()
      //       ),
      //     // array(
      //     //     'name'  => '新闻采编部',
      //     //     'child' => array()
      //     //   ),
      //     array(
      //         'name'  => '产品部',
      //         'child' => array()
      //       ),
      //     array(
      //         'name'  => '技术部',
      //         'child' => array(
      //             array(
      //                 'name'  => '设计组',
      //                 'content'
      //               ),
      //             array(
      //                 'name'  => '前端组'
      //               ),
      //             array(
      //                 'name'  => '后台组'
      //               ),
      //             array(
      //                 'name'  => '安卓组'
      //               ),
      //             array(
      //                 'name'  => 'iOS组'
      //               ),
      //             array(
      //                 'name'  => '运营组'
      //               )
      //           )
      //       )
      //   );
      $this->assign('departList', $departList);
      if(isMobile()){
         $this->display('mobile/intro/intro');
      }else{
         $this->display('web/index');
      }
    }

}