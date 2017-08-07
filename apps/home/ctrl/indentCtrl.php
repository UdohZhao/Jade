<?php
namespace apps\home\ctrl;
use apps\home\model\indent;
class indentCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
    public $openid;
  public function _auto(){
      $this->wuid=isset($_SESSION['userinfo']['wuid'])?$_SESSION['userinfo']['wuid']:'';
      $this->openid=isset($_SESSION['openInfo']['openid'])?$_SESSION['openInfo']['openid']:'';
  }

  // 订单页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $model=new indent();
        $type=isset($_GET['type'])?$_GET['type']:'';
        $this->assign('orderInfo',$model->sel($this->wuid,$type));
      $this->display('indent','index.html');
      die;
    }
  }

  // 订单详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:'';
        if($id){
            $model=new indent();
            $this->assign('orderDetail',$model->orderDetail($id,$this->wuid));
        }
      $this->display('indent','detail.html');
      die;
    }
  }

  public function operOrder(){
      $model=new indent();

      //订单id
      $id=$_POST['id'];
      $status=$_POST['status'];
      //支付金额
      $money=$_POST['money'];

      if($status=='pay'){

          //判断是否有默认地址
          if(!$model->defaultAddr($this->wuid)){
              echo json_encode(array('status'=>false,'msg'=>'请设置默认地址'));
              exit;
          }
          //调用支付函数  测试成功
          $payStatus=true;
          if($payStatus){
              //执行数据库操作
            echo json_encode($model->buy($id));
              exit;
          } else{
              echo json_encode(array('status'=>false,'msg'=>'支付失败,稍后再试'));
              exit;
          }
      }
      if($status == 'got'){
          //买家确认收货
          echo json_encode($model->hasGot($id));
          exit;
      }
      if($status == 'backMoney'){
          echo json_encode($model->backMoney($id));
          exit;
      }
      if($status=='cancel'){
          echo json_encode($model->cancel($id));
          exit;
      }
  }


  //接入微信支付
    public function js_api(){
        //微信是分计算换为元
        //判断是否有默认地址
        $model=new indent();
        if(!$model->defaultAddr($this->wuid)){
            echo json_encode(array('status'=>false,'msg'=>'请设置默认地址'));
            exit;
        }

        $info= $model->sel_name(intval($_POST['id']));
        $total_fee=bcmul(100,floatval($_POST['money']),2);//金额
        $openId=$this->openid;
        $goods=$info['goods_name'];
        $order_sn=$info['serial_number'];//订单号
        $attach=intval($_POST['id']);//附加
        $jsApiParameters = wxJsapiPay($openId,$goods,$order_sn,$total_fee,$attach);
        $jsApiParameters=json_decode($jsApiParameters);
        echo json_encode($jsApiParameters);
    }



}