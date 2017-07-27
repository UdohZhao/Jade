<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
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
      $this->display('mySelf','index.html');
      die;
    }
  }

}