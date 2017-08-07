<?php
namespace apps\home\ctrl;
use apps\home\model\catalogue;
use apps\home\model\demoModel;
class catalogueCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 目录页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $type=isset($_GET['type'])?$_GET['type']:0;
        $model=new catalogue();
        $info=$model->sel($type);
        $this->assign('type',$type);
        $this->assign('cataInfo',$info);
      $this->display('catalogue','index.html');
      die;
    }
  }

}