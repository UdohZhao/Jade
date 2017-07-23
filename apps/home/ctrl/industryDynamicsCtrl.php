<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\industryDynamics;

class industryDynamicsCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 行业动态页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $model=new industryDynamics();
        $this->assign('industryInfo',$model->sel());
      $this->display('industryDynamics','index.html');
      die;
    }
  }

  // 行业动态详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:0;
        $model=new industryDynamics();
        $this->assign('detailInfo',$model->selDetail($id));
      $this->display('industryDynamics','detail.html');
    }
  }

}