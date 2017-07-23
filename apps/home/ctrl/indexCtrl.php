<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\index;

class indexCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 昆明玉投商贸首页
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $model=new index();
        //最新新闻,10条
        $this->assign('newsInfo',$model->selNews());
      $this->display('index','index.html');
      die;
    }
  }

}