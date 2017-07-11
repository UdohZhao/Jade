<?php
namespace apps\admin\ctrl;
use core\lib\conf;
class baseCtrl extends \core\icunji{
  public $userinfo;
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
    // 用户session
    if (!isset($_SESSION['userinfo'])) {
      header('Location:/admin/login/index');
      die;
    }
    // 网站名称
    $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
    // 用户信息
    $this->userinfo = $_SESSION['userinfo'];
    $this->assign('userinfo',$this->userinfo);
  }

}