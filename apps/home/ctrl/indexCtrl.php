<?php
namespace apps\home\ctrl;
use apps\home\model\index;
class indexCtrl extends baseCtrl{
  // 构造方
    public $openid;
    private $db;
  public function _auto(){

      $this->db=$this->selOpenid();
      $this->openid=isset($_SESSION['openInfo']['openid'])?$_SESSION['openInfo']['openid']:'';
  }

  //引入单例化类
    private function selOpenid(){
        require "single.php";
        return $db;
    }
    //get用户数据
    private function get_data(){
        if (isset($_SESSION['openInfo'])) {
            $data=array();
            $data['openid']=$_SESSION['openInfo']['openid'];
            $data['nickname']=$_SESSION['openInfo']['nickname'];
            $data['sex']=$_SESSION['openInfo']['sex'];
            $data['province']=$_SESSION['openInfo']['province'];
            $data['city']=$_SESSION['openInfo']['city'];
            $data['country']=$_SESSION['openInfo']['country'];
            $data['headimgurl']=$_SESSION['openInfo']['headimgurl'];
            $data['privilege']=json_encode($_SESSION['openInfo']['privilege']);
            return $data;
        }
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
      }else{
          //新用户，弹出输入所关联客服用户工作号，执行增加程序
          $this->assign('needJobNum',1);
          $data=$this->get_data();

          if($this->db->add_info($data)){
              //重新记录SESSION
              $this->index();
          }
      }
    if (IS_GET === true) {
      // display

        $model=new index();
        //最新新闻,10条
        $this->assign('newsInfo',$model->selNews());
        //查询热点商品图片
        $this->assign('article_link',$model->selBanner());
      $this->display('index','index.html');
      die;
    }
  }

  public function update_info(){
      $jobNum=$_POST['job'];
      //查询该工作号对应的id
      $model=new index();
      $info=$model->selJob_num($jobNum);
      if($info['status']==1){
          echo json_encode(array('status'=>false,'msg'=>'该工作号已被冻结'));
      }else if($info['status']==0 && $info['id']){
          //修改数据记录
          $wuid=$_SESSION['userinfo']['wuid'];

          if($model->update_jobNum($wuid,$info['id'])){
              echo json_encode(array('status'=>true,'msg'=> '添加成功'));
          }

      }else{
          echo json_encode(array('status'=>false,'msg'=>'不存在的工作号,请重填'));
      }
  }
}