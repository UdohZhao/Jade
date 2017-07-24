<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\news;
use vendor\page\Page;
use vendor\fileupload\fileupload;
class newsCtrl extends baseCtrl{
  public $id;
  // 构造方法
  public function _auto(){
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 发布新闻页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // model
        $model = new news();
        $res = $model->getInfo($this->id);
        // assign
        $this->assign('data',$res);
      }
      // display
      $this->display('news','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      if (!is_array($data)) {
        echo json_encode($data);
        die;
      }
      // model
      $model = new news();
      // 防止重复添加
      $res = $model->getId($data['title']);
      // res
      if ($res) {
        // id
        if ($this->id) {
          if ($res != $this->id) {
            echo json_encode(1);
            die;
          }
        } else {
          echo json_encode(1);
          die;
        }
      }
      // if
      if ($this->id) {
        $res = $model->save($this->id,$data);
      } else {
        $res = $model->add($data);
      }
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

  // 初始化数据
  public function getData(){
    // data
    $data = array();
    // file
    if ($_FILES) {
      // 文件上传
      $up = new FileUpload();
      if ($up->upload('coverimg_path')) {
        $data['coverimg_path'] = '/admin/uploads/'.$up->getFileName();
      } else {
        return $up->getErrorMsg();
      }
    }
    $data['title'] = $_POST['title'];
    $data['type'] = $_POST['type'];
    // type
    if ($data['type'] == 0) {
      $data['content'] = $_POST['content'];
        $data['aid'] = 0;
    } else {
      $data['aid'] = $_POST['aid'];
        $data['content'] = '';
    }
    $data['ctime'] = time();
    return $data;
  }

  // 新闻列表页面
  public function index(){
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    // model
    $model = new news();
    $cou = $model->cou();
    // 数据分页
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
    // 结果集
    $res = $model->sel($search,bcsub($p->currPage,1,0),$p->subPages);
    // assign
    $this->assign('data',$res);
    $this->assign('page',$p->showPages(1));
    // display
    $this->display('news','index.html');
    die;
  }

  // 删除封面图片
  public function delCp(){
    // Ajax
    if (IS_AJAX === true) {
      // id，path
      $id = $_POST['id'];
      $path = ICUNJI.$_POST['path'];
      if (unlink($path)) {
        // model
        $model = new news();
        $res = $model->saveCp($id);
        if ($res) {
          echo json_encode(true);
          die;
        } else {
          echo json_encode(false);
          die;
        }
      } else {
        echo json_encode(false);
        die;
      }
    }
  }

  // 删除
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      // model
      $model = new news();
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