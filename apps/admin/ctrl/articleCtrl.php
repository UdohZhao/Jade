<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\catalogue;
use apps\admin\model\article;
use vendor\page\Page;
class articleCtrl extends baseCtrl{
  public $cid;
  public $id;
  // 构造方法
  public function _auto(){
    $this->cid = isset($_GET['cid']) ? intval($_GET['cid']) : 0;
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    // cModel
    $cModel = new catalogue();
    $cRes = $cModel->getInfo($this->cid);
    // assign
    $this->assign('cData',$cRes);
  }

  // 增添章节页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // di
      if ($this->id) {
        $model = new article();
        $res = $model->getInfo($this->id);
        // assign
        $this->assign('data',$res);
      }
      // display
      $this->display('article','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // model
      $model = new article();
      // 防止重复添加
      $res = $model->getTitle($data['title'],$data['type']);
      // if
      if ( $res ) {
        // id
        if ($this->id) {
          // if
          if ($res[0] != $this->id) {
            echo json_encode(1);
            die;
          }
        } else {
          echo json_encode(1);
          die;
        }
      }
      // id
      if ($this->id) {
        // update
        $res = $model->save($this->id,$data);
      } else {
        // insert
        $res = $model->add($data);
      }
      // if
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }

  }

  // 初始化数据
  private function getData(){
    // data
    $data = array();
    $data['cid'] = $this->cid;
    $data['title'] = htmlspecialchars($_POST['title']);
    $data['content'] = $_POST['content'];
    $data['price'] = $_POST['price'];
    $data['ctime'] = time();
    $data['type'] = $_POST['type'];
    return $data;
  }

  // 章节列表页面
  public function index(){
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    // model
    $model = new article();
    $cou = $model->cou($this->cid);
    // 数据分页
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
    // 结果集
    $res = $model->sel($this->cid,$search,bcsub($p->currPage,1,0),$p->subPages);
    // assign
    $this->assign('data',$res);
    $this->assign('page',$p->showPages(1));
    // display
    $this->display('article','index.html');
    die;
  }

  // 删除章节
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      // model
      $model = new article();
      $res = $model->del($this->id);
      // if
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }

  // 获取文章数据
  public function getAid(){
    // Ajax
    if (IS_AJAX === true) {
      // search
      $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
      // model
      $model = new article();
      $res = $model->getAid($search);
      echo json_encode($res);
      die;
    }
  }

}