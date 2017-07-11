<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\goods;
use vendor\page\Page;
class goodsCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new goods();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加商品页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // data
        $res = $this->db->getInfo($this->id);
        $res['cover_path'] = unserialize($res['cover_path']);
        // assign
        $this->assign('data',$res);
      }
      // display
      $this->display('goods','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // 防止重复添加
      $res = $this->db->getId(htmlspecialchars($_POST['cname']));
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
      // file
      $res = upFiles('cover_path');
      if ( $res['error'] == 1 ) {
        echo json_encode($res['msg']);
        die;
      }
      // data
      $data = $this->getData($res['cover_path']);
      // id
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
  private function getData($coverPath){
    // data
    $data = array();
    $data['cname'] = htmlspecialchars($_POST['cname']);
    $data['keywords'] = htmlspecialchars($_POST['keywords']);
    $data['cover_path'] = serialize($coverPath);
    $data['specification'] = htmlspecialchars($_POST['specification']);
    $data['market_price'] = $_POST['market_price'];
    $data['promotion_price'] = $_POST['promotion_price'];
    $data['details'] = $_POST['details'];
    $data['inventory'] = $_POST['inventory'];
    $data['ctime'] = time();
    $data['gtype'] = $_POST['gtype'];
    $data['type'] = $_POST['type'];
    $data['status'] = $_POST['status'];
    return $data;
  }

  // 商品列表页面
  public function index(){
    // type
    $type = isset($_GET['type']) ? intval($_GET['type']) : 0;
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    $cou = $this->db->cou($type);
    // 数据分页
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
    // res
    $res = $this->db->sel($type,$search,bcsub($p->currPage,1,0),$p->subPages);
    // assign
    $this->assign('type',$type);
    $this->assign('data',$res);
    $this->assign('page',$p->showPages(1));
    // display
    $this->display('goods','index.html');
    die;
  }

  // 删除封面图片
  public function delCp(){
    // Ajax
    if (IS_AJAX === true) {
      // id，path
      $id = $_POST['id'];
      $sort = $_POST['sort'];
      $path = ICUNJI.$_POST['path'];
      if (unlink($path)) {
        $res = $this->db->getInfo($id);
        $res['cover_path'] = unserialize($res['cover_path']);
        $res['cover_path'][$sort] = '';
        $data['cover_path'] = serialize($res['cover_path']);
        // saveCp
        $res = $this->db->saveCp($id,$data);
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
      // del
      $res = $this->db->del($this->id);
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