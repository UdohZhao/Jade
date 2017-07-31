<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\mySelf;

class mySelfCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
    public $name;
    public $headpath;
  public function _auto(){
    $this->wuid=$_SESSION['userinfo']['wuid'];
    $this->name=$_SESSION['userinfo']['name'];
    $this->headpath=$_SESSION['userinfo']['headpath'];
  }

  // 我的页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $this->assign('name',$this->name);
        $this->assign('headpath',$this->headpath);
        //查询订单对应数量
        $model=new mySelf();
        //待付款  type=0
        $this->assign('orderNum0',$model->selNum($this->wuid,0));
        //待收货 type=2
        $this->assign('orderNum1',$model->selNum($this->wuid,2));
        //待评价
        $this->assign('orderNum2',$model->selNum($this->wuid,3));
        //售后
        $this->assign('orderNum3',$model->selNum($this->wuid,4));
      $this->display('mySelf','index.html');
      die;
    }
  }

}