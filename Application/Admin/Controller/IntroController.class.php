<?php
namespace Admin\Controller;
use Think\Controller;
class IntroController extends CommonController {

  public function intro(){
    $intro = M("intro") -> select();
    $this->assign('intro',$intro);
    $this->display();
  }

  // public function add(){ //添加
  //   if(IS_POST){
  //     $data = array(
  //       'department' => I('department'),
  //       'intro' => I('intro')
  //     );
  //     $Add = M("intro");
  //     if($Add->create($data)){
  //       if($Add->add()){
  //         $this->success('添加成功',U('Admin/Intro/intro'));
  //       }else{
  //         $this->error('添加失败',U('Admin/Intro/add'));
  //       }
  //     }else{
  //       $this->error($Add->getError());
  //     }

  //   }else{
  //     $this->display('Intro/edit');
  //   }
  // }

  public function edit($id){ //更新
    if(IS_POST){
      $data = array(
        'department' => I('department'),
        'intro' => I('intro')
      );
      $where['id'] = $id;
      $Insert = M("intro")->where($where)->save($data);
       if($Insert){
         echo "<script>alert('修改成功');</script>";
       }
    }
    $intro = M("intro")->getById($id);
    $this->assign('intro',$intro);
    $this->display('Intro/edit');
  }

  // public function delete($id){ //删除
  //   $delete = M("intro");
  //   $where['id'] = $id;
  //   $res = M("intro")->where($where)->delete();
  //   if($res){
  //     $this->success('删除成功',U('Admin/Intro/intro'),3);
  //   }
  // }

}