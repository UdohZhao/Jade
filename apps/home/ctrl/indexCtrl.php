<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class indexCtrl extends baseCtrl
{
  // 构造方法
  public function _auto(){

  }
  // 默认控制器的默认方法
  public function index(){
    $this->display('index','index.html');
  }

}