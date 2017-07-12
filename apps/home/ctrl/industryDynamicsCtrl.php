<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class industryDynamicsCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 行业动态页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('industryDynamics','index.html');
      die;
    }
  }

  // 行业动态详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('industryDynamics','detail.html');
    }
  }

}