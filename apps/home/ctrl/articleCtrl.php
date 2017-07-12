<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class articleCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 文章页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('article','index.html');
      die;
    }
  }

  // 文章详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('article','detail.html');
      die;
    }
  }

}