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
            if(isset($_SESSION['openInfo']['unionid'])){
                $data['unionid']=$_SESSION['openInfo']['unionid'];
            }else{
                $data['unionid']=NULL;
            }
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




  //支付测试
    public function test(){
        header('Location:/Wechatpay/jsapi');
    }

    // 微信支付回调
    public function notify(){
        //$xml = $GLOBALS['HTTP_RAW_POST_DATA'];
        $xml = file_get_contents("php://input");

        // 这句file_put_contents是用来查看服务器返回的XML数据 测试完可以删除了
        file_put_contents("./log/checkNotify.txt",$xml.PHP_EOL,FILE_APPEND);

        //将服务器返回的XML数据转化为数组
        //$data = json_decode(json_encode(simplexml_load_string($xml,'SimpleXMLElement',LIBXML_NOCDATA)),true);
        $data = xmlToArray($xml);
        // 保存微信服务器返回的签名sign
        $data_sign = $data['sign'];
        // sign不参与签名算法
        unset($data['sign']);
        $sign = makeSign($data);

        // 判断签名是否正确  判断支付状态
        if ( ($sign===$data_sign) && ($data['return_code']=='SUCCESS') && ($data['result_code']=='SUCCESS') ) {
            $result = $data;
            // 这句file_put_contents是用来查看服务器返回的XML数据 测试完可以删除了
            file_put_contents("./log/okNotify.txt",$xml.PHP_EOL,FILE_APPEND);

            //获取服务器返回的数据
            $order_sn = $data['out_trade_no'];  //订单单号
            $order_id = $data['attach'];        //附加参数,选择传递订单ID
            $openid = $data['openid'];          //付款人openID
            $total_fee = $data['total_fee'];    //付款金额

            //更新数据库
            //$this->updateDB($order_id,$order_sn,$openid,$total_fee);
            $model=new index();
            $model->test_fun();
        }else{
            $result = false;
        }
        // 返回状态给微信服务器
        if ($result) {
            $str='<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>';
        }else{
            $str='<xml><return_code><![CDATA[FAIL]]></return_code><return_msg><![CDATA[签名失败]]></return_msg></xml>';
        }
        echo $str;
        return $result;
    }
}