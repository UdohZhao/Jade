<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class newsCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 新闻页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('news','index.html');
      die;
    }
  }

  // 新闻详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('news','detail.html');
      die;
    }
  }

}