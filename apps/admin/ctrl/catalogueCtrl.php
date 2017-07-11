<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\catalogue;
use vendor\page\Page;
class catalogueCtrl extends baseCtrl{
  public $id;
  // 构造方法
  public function _auto(){
    $this->id = isset($_GET['id']) ? $_GET['id'] : 0;
  }

  // 添加目录页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // model
        $model = new catalogue();
        $res = $model->getInfo($this->id);
        // assign
        $this->assign('data',$res);
      }
      // display
      $this->display('catalogue','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // model
      $model = new catalogue();
      // 防止重复添加
      $res = $model->getTitle($data['title'],$data['type']);
      if ($res) {
        // id
        if ($this->id && $res[0] != $this->id) {
          echo json_encode(1);
          die;
        }
        if (!$this->id) {
          echo json_encode(1);
          die;
        }
      } else {
        // id
        if ($this->id) {
          $res = $model->save($this->id,$data);
        } else {
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

  }

  // 初始化数据
  private function getData(){
    // data
    $data = array();
    $data['title'] = htmlspecialchars($_POST['title']);
    $data['sort'] = intval($_POST['sort']);
    $data['type'] = intval($_POST['type']);
    return $data;
  }

  // 目录列表页面
  public function index(){
    // type
    $type = isset($_GET['type']) ? intval($_GET['type']) : 0;
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    // model
    $model = new catalogue();
    $cou = $model->cou();
    // 数据分页
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
    $res = $model->sel($type,$search,bcsub($p->currPage,1,0),$p->subPages);
    // assign
    $this->assign('type',$type);
    $this->assign('data',$res);
    $this->assign('page',$p->showPages(1));
    // display
    $this->display('catalogue','index.html');
    die;
  }

  // 删除
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      // model
      $model = new catalogue();
      $res = $model->del($this->id);
      // res
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }

}