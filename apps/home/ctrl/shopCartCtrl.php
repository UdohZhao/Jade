<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class shopCartCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 购物车页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('shopCart','index.html');
      die;
    }
  }

}