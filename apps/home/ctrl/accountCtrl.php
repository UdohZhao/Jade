<?php
namespace apps\home\ctrl;
use apps\home\model\account;
class accountCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
    public $suid;
  public function _auto(){
    $this->wuid=$_SESSION['userinfo']['wuid'];
    $this->suid=$_SESSION['userinfo']['suid'];
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
  public function recharge(){
      $money=$_POST['money'];
      $model=new account();
      $info=$model->recharge($this->wuid,$money,$this->suid);
      if($info){
          if($info['msg'] == 'first'){
              echo json_encode(array('status'=>true,'msg'=>'首次充值,系统已自动使用邀请码优惠'.$info['divide'].'%'));
          }else{
              echo json_encode(array('status'=>true,'msg'=>'充值成功'));
          }
      }else{
          echo json_encode(array('status'=>false,'msg'=>'充值失败'));
      }
  }
}