<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class mySelfCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 我的页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('mySelf','index.html');
      die;
    }
  }

}