<?php
namespace apps\home\ctrl;
use apps\home\model\news;
use apps\home\model\receiverAddress;
use apps\home\model\recevierAddress;
class receiverAddressCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
  public function _auto(){
    $this->wuid=$_SESSION['userinfo']['wuid'];
  }

  // 收货地址页面
  public function index(){
    // Get
      $model=new receiverAddress();
    if (IS_GET === true) {
      // display
        $this->assign('addrInfo',$model->sel($this->wuid));
      $this->display('receiverAddress','index.html');
      die;
    }
  }

  // 添加收货地址页面
  public function add(){
    // Get
      $model=new receiverAddress();
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:'';
        if($id){
            $this->assign('addrDetail',$model->thisAddr($id));
        }
      $this->display('receiverAddress','add.html');
      die;
    }
    if(IS_POST === true){
        if($this->getData()['status']==1 && $model->checkedAdd()){
            //修改查询得到的默认地址状态
            $model->updateStatus($model->checkedAdd()['id']);
        }
        $re = $model->add($this->getData());
        if($re){
            header('Location:/receiverAddress/index');
        }
    }
  }
  // 地址列表
  public function addresslist(){
    // Get
    if (IS_GET === true) {
      // display
        $model=new receiverAddress();
        $this->assign('addrList',$model->addrList($this->wuid));
      $this->display('receiverAddress','addresslist.html');
      die;
    }
  }
  //获取post数据
  private function getData(){
      $data=array();
      $data['wuid']=$this->wuid;
      $data['consignee']=htmlspecialchars($_POST['consignee']);
      $data['contact_number']=htmlspecialchars($_POST['contact_number']);
      $data['address']=serialize($_POST['address']);
      $data['status']=isset($_POST['status'])?$_POST['status']:0;
      return $data;
  }

  //修改页面
    public function update(){
        $id=$_GET['id'];
        $model=new receiverAddress();
        if($this->getData()['status']==1 && $model->checkedAdd()){
            //修改查询得到的默认地址状态
            $model->updateStatus($model->checkedAdd()['id']);
        }
        $re = $model->updateAddr($id,$this->getData());
        if($re){
            header('Location:/receiverAddress/index');
        }
    }

    //删除地址数据
    public function delAddr(){
        $id=$_GET['id'];
        $model=new receiverAddress();
        if($model->del($id)){
            header('Location:/receiverAddress/index');
        }
    }
}