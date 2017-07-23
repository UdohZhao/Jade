<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\news;

class newsCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 新闻页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $model=new news();
        $info=$model->sel();
        $this->assign('newsInfo',$info);
      $this->display('news','index.html');
      die;
    }
  }

  // 新闻详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:0;
        $aid=isset($_GET['aid'])?$_GET['aid']:0;
        $model=new news();
        $this->assign('newsDetail',$model->selDetail($id,$aid));
      $this->display('news','detail.html');
      die;
    }
  }

}