<?php
namespace apps\home\ctrl;
use apps\home\model\index;
class indexCtrl extends \core\icunji{
  // 构造方
    public $openid;
    private $db;
  public function _initialize(){
      $this->db=$this->selOpenid();
      $_GET['openid']='openid';//模拟openid
      $this->openid=isset($_GET['openid'])?$_GET['openid']:'';
  }

  //引入单例化类
    private function selOpenid(){
        require "single.php";
        return $db;
    }
  // 昆明玉投商贸首页
  public function index(){
    // Get
      $userInfo=$this->db->sel($this->openid);
      if($userInfo){
          //记录当前微信用户的id
          $_SESSION['userinfo']['wuid']=$userInfo['id'];
          //关联的客服id
          $_SESSION['userinfo']['suid']=$userInfo['suid'];
          //当前微信用户姓名
          $_SESSION['userinfo']['name']=$userInfo['nickname'];
          //当前微信用户头像
          $_SESSION['userinfo']['headpath']=$userInfo['headimgurl'];
      }

    if (IS_GET === true) {
      // display

        $model=new index();
        //最新新闻,10条
        $this->assign('newsInfo',$model->selNews());
        //查询热点商品图片
        $this->assign('hotImg',$model->selBanner());
      $this->display('index','index.html');
      die;
    }
  }

}