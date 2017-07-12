<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class indexCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 昆明玉投商贸首页
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('index','index.html');
      die;
    }
  }

}