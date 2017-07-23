<?php
namespace apps\home\ctrl;
use apps\home\model\article;
class articleCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 文章页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:'';
        $model=new article();
        $this->assign('articleInfo',$model->sel($id));
      $this->display('article','index.html');
      die;
    }
  }

  // 文章详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $model=new article();
        $id=isset($_GET['id'])?$_GET['id']:'';
        $this->assign('detailInfo',$model->selDetail($id));

      $this->display('article','detail.html');
      die;
    }
  }

}