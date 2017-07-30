<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\news;
use apps\home\model\shopCart;

class shopCartCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
  public function _auto(){
    $this->wuid=$_SESSION['userinfo']['wuid'];
  }

  // 购物车页面
  public function index(){
    // Get
      $model=new shopCart();
    if (IS_GET === true) {
      // display
        $this->assign('shopCart',$model->selShopcar($this->wuid));
      $this->display('shopCart','index.html');
      die;
    }
  }

  //删除购物车
  public function delCar(){
      //购物车id
      $id=isset($_POST['carId'])?$_POST['carId']:'';
      if($id){
            $model=new shopCart();
          if($model->delCar($id)){
              echo json_encode(array('status'=>true));
          }else{
              echo json_encode(array('status'=>false));
          }
      }
  }
}