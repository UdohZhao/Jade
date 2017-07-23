<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\goods;

class goodsCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 商品详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:0;
        $model=new goods();
        $this->assign('goodDetail',$model->selDetail($id));
        //商品评论
        $this->assign('estimate',$model->estimate($id));
      $this->display('goods','detail.html');
      die;
    }
  }

  // 商品页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $type=isset($_GET['type'])?$_GET['type']:0;
        $model=new goods();
        $this->assign('goodsInfo',$model->selGood($type));
        $this->assign('type',$type);
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