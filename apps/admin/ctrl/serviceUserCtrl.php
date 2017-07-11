<?php
namespace apps\admin\ctrl;
use core\lib\conf;
class serviceUserCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 添加客服页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('serviceUser','add.html');
      die;
    }
  }

}