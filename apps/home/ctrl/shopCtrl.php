<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class shopCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 店铺首页
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('shop','index.html');
      die;
    }
  }

}