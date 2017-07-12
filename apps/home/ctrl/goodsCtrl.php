<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class goodsCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 商品详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('goods','detail.html');
      die;
    }
  }

  // 商品页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('goods','index.html');
      die;
    }
  }

  // 商品评价
  public function estimate(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('goods','estimate.html');
      die;
    }
  }

}