<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class accountCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 账户页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('account','index.html');
      die;
    }
  }

}