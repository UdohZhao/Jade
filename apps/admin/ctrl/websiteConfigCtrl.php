<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\websiteConfig;
class websiteConfigCtrl extends baseCtrl{
  public $db;
  // 构造方法
  public function _auto(){
    $this->db = new websiteConfig();
  }

  // 站点配置页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // select
      $res = $this->db->getInfo();
      // assign
      $this->assign('data',$res);
      // display
      $this->display('websiteConfig','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // update
      $res = $this->db->save($data);
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
    $data['copyright'] = htmlspecialchars($_POST['copyright']);
    $data['royalties'] = $_POST['royalties'];
    $data['pay'] = $_POST['pay'];
    $data['status'] = $_POST['status'];
    $data['ctime'] = time();
    return $data;
  }

}