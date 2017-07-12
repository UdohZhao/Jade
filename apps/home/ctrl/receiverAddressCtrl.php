<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class receiverAddressCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 收货地址页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('receiverAddress','index.html');
      die;
    }
  }

  // 添加收货地址页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('receiverAddress','add.html');
      die;
    }
  }

}