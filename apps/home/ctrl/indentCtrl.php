<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class indentCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 订单页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('indent','index.html');
      die;
    }
  }

  // 订单详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('indent','detail.html');
      die;
    }
  }

}