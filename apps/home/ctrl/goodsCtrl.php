<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\goods;

class goodsCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
  public function _auto(){
    $this->wuid=$_SESSION['userinfo']['wuid'];
  }

  // 商品详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:0;
        $model=new goods();
        $this->assign('goodDetail',$model->selDetail($id));
        //商品评论
        $this->assign('estimate',$model->estimate($id));
      $this->display('goods','detail.html');
      die;
    }
  }

  // 商品页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $type=isset($_GET['type'])?$_GET['type']:0;
        $model=new goods();
        $this->assign('goodsInfo',$model->selGood($type));
        $this->assign('type',$type);
      $this->display('goods','index.html');
      die;
    }
  }

  // 商品评价
  public function estimate(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('goods','estimate.html');
      die;
    }
  }

  // 订单确认    //结算购物车时展示选择的商品
  public function confirmOrder(){
    // Get
      $model=new goods();
    if (IS_GET === true) {
      // display
        //购物车id
        $this->assign('myAddr',$model->myAddr($this->wuid));
        $id=isset($_GET['shopCarId'])?$_GET['shopCarId']:'';
        if($id){
            $id=explode(',',$id);
          $this->assign('shopCart',$model->shopDetail($id));
        }
        //直接购买商品
        $goodId=isset($_GET['goodId'])?$_GET['goodId']:'';
        if($goodId){
            $this->assign('oneGoodInfo',$model->shopGood($goodId));
        }
      $this->display('goods','confirmOrder.html');
      die;
    }
  }

  //加入购物车
    public function add_shopcar(){
        $_POST['ctime']=time();
        $_POST['wuid']=$this->wuid;
        //加入购物车
        $model = new goods();
        if($model->addCar($_POST)){
            echo json_encode(array('msg'=>'成功加入购物车','status'=>true));
        }else{
            echo json_encode(array('msg'=>'操作失败','status'=>false));
        }
    }
    //追加数据
    public function moreData(){
        $model=new goods();
        $type=$_POST['type'];
        $page=intval($_POST['page'])+1;
        echo json_encode($model->moreGood($page,$type));
    }
}