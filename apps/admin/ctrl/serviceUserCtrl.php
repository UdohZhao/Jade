<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\serviceUser;
use vendor\page\Page;
class serviceUserCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new serviceUser();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加客服页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // getInfo
        $res = $this->db->getInfo($this->id);
        // assign
        $this->assign('data',$res);
      }
      // display
      $this->display('serviceUser','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // 防止重复添加
      $res = $this->db->getId($data['cname'],$data['jobnumber']);
      if ($res) {
        echo json_encode(1);
        die;
      }
      // insert
      $res = $this->db->add($data);
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
    $data['pid'] = isset($_POST['pid']) ? $_POST['pid'] : 0;
    $data['jobnumber'] = htmlspecialchars($_POST['jobnumber']);
    $data['cname'] = htmlentities($_POST['cname']);
    $data['income'] = 0;
    $data['ctime'] = time();
    $data['status'] = 0;
    return $data;
  }

  // 客服列表
  public function index(){
    // pid
    $pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
    // 读取上级客服姓名
    if ($pid) {
      $res = $this->db->getInfo($pid);
      $cname = $res['cname'];
    } else {
      $cname = '顶级客服';
    }
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    $cou = $this->db->cou($pid);
    // 数据分页
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
    // select
    $res = $this->db->sel($pid,$search,bcsub($p->currPage,1,0),$p->subPages);
    // assign
    $this->assign('pid',$pid);
    $this->assign('cname',$cname);
    $this->assign('data',$res);
    $this->assign('page',$p->showPages(1));
    // display
    $this->display('serviceUser','index.html');
    die;
  }

  // flag
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      // 获取数据
      $id = $_POST['id'];
      $status = $_POST['status'];
      $res = $this->db->flag($id,$status);
      // if
      if ($res) {
        echo json_encode(true);
        die;
      }else{
        echo json_encode(false);
        die;
      }
    }
  }

  // del
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      // 查询下级
      $res = $this->db->couJunior($this->id);
      if ($res) {
        echo json_encode(1);
        die;
      }
      // 删除
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