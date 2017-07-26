<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\shop;

class shopCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 店铺首页
  public function index(){
    // Get
      $model=new shop();
    if (IS_GET === true) {
      // display
        $this->assign('goodInfo',$model->AllGood());
      $this->display('shop','index.html');
      die;
    }
    $keyword  =  trim($_POST['keyword']);
      if($keyword){
          $this->assign('goodInfo',$model->AllGood($keyword));
      }
      $this->display('shop','index.html');
  }

}