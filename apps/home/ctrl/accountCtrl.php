<?php
namespace apps\home\ctrl;
use apps\home\model\account;
class accountCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
    public $openid;
    public $suid;
  public function _auto(){
    $this->wuid=isset($_SESSION['userinfo']['wuid'])?$_SESSION['userinfo']['wuid']:'';
    $this->suid=isset($_SESSION['userinfo']['suid'])?$_SESSION['userinfo']['suid']:'';
    $this->openid=isset($_SESSION['openInfo']['openid'])?$_SESSION['openInfo']['openid']:'';
  }

  // 账户页面
  public function index(){
    // Get
      $model=new account();
    if (IS_GET === true) {
      // display
        $this->assign('moneyInfo',$model->selInfo($this->wuid));
      $this->display('account','index.html');
      die;
    }
  }

  /*用户充值方法
  @param wuid 当前微信用户id
  @param money 用户充值金额
  @param suid  当前微信用户关联的客服id
   * */
 /* public function recharge(){
      $money=$_POST['money'];//金额
      $openId=$this->openid;
      $goods='用户充值';
      $order_sn=indent_number();//订单号
      $attach='';//附加
      $model=new account();
      $info=$model->recharge($this->wuid,$money,$this->suid);
      if($info){
          if($info['msg'] == 'first'){
              echo json_encode(array('status'=>true,'money'=>$info['money'],'msg'=>'首次充值,系统已自动使用邀请码优惠'.$info['divide'].'%'));
          }else{
              echo json_encode(array('status'=>true,'money'=>$info['money'],'msg'=>'充值成功'));
          }
      }else{
          echo json_encode(array('status'=>false,'msg'=>'充值失败'));
      }
  }*/



    /*用户充值方法
   @param wuid 当前微信用户id
   @param money 用户充值金额
   @param suid  当前微信用户关联的客服id
    * */
  //接入微信支付接口
        public function recharge(){
            //微信是分计算换为元
            $total_fee=bcmul(100,$_POST['money'],0);//金额
            $openId=$this->openid;
            $goods='用户充值';
            $order_sn=indent_number();//订单号
            $attach='accountRecharge';//附加
            $jsApiParameters = wxJsapiPay($openId,$goods,$order_sn,$total_fee,$attach);
            $jsApiParameters=json_decode($jsApiParameters,true);
            $jsApiParameters['wuid']=$this->wuid;
            $jsApiParameters['suid']=$this->suid;
            echo json_encode($jsApiParameters);
    }

}