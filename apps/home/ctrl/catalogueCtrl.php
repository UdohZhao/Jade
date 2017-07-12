<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class catalogueCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 目录页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('catalogue','index.html');
      die;
    }
  }

}