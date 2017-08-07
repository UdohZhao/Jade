<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class attentionCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 关注页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('attention','index.html');
      die;
    }
  }

}