<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
use apps\home\model\goods;

class goodsCtrl extends baseCtrl{
  // 构造方法
    public $wuid;
  public function _auto(){
      $this->wuid=isset($_SESSION['userinfo']['wuid'])?$_SESSION['userinfo']['wuid']:'';

  }

  // 商品详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:0;
        $model=new goods();
        $this->assign('goodDetail',$model->selDetail($id));
        //商品评论  商品id
        $this->assign('estimate',$model->good_estimate($id));
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
        //订单id

        $indentId=isset($_GET['indentId'])?$_GET['indentId']:'';
       //查询订单下的商品名称

        if($indentId){
            $model=new goods();
            $this->assign('goodsInfo',$model->selIndent_info($indentId));
            $this->assign('indentId',$indentId);
        }
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
        //收货地址
        if($model->myAddr($this->wuid)){
            $this->assign('myAddr',$model->myAddr($this->wuid));
        }else{
            $this->assign('myAddr','');
        }
        //购物车id
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

    //生成订单
    public function intoOrder(){
        //获取数组
        $orderArr=$_POST['orderArr'];
        $data=array();
        //购物车id
        $data['shopcar_id']=explode('<=>',$orderArr[6]) ;
        $data['goods_coverpath']=serialize(explode('<=>',$orderArr[1])) ;
        $data['goods_name']=serialize(explode('<=>',$orderArr[2])) ;
        $data['goods_specification']=serialize(explode('<=>',$orderArr[3])) ;
        $data['goods_price']=serialize(explode('<=>',$orderArr[4])) ;
        $data['goods_quantity']=serialize(explode('<=>',$orderArr[5])) ;
        $data['message']=$_POST['msg'];
        $data['total_price']=$_POST['finalMoney'];
        $wuid=$this->wuid;
        $model=new goods();
        $info=$model->orderInfo($data,$wuid);
        if($info){
            echo json_encode(array('status'=>true));
        }else{
            echo json_encode(array('status'=>false));
        }

    }
    //商品评价方法
    public function saveEstimate(){
            $model= new goods();
        $data=array();
        $data['wuid']=$this->wuid;
        $data['content']=$_POST['content'];
        $data['ctime']=time();
        $data['type']=$_POST['radio1'];
        //订单id
        $data['indentId']=$_POST['indentId'];
        //查询该订单的商品和对应规格信息数组.二维数组
        $needInfo=$model->selIndent_info($data['indentId']);
        $info=array();
        $needData=array();
        foreach($needInfo as $k=>$v){
            $needData[$k]['gid']=$v['gid'];
            $needData[$k]['specification']=$v['specification'];
            $needData[$k]['wuid']=$this->wuid;
            $needData[$k]['content']=$_POST['content'];
            $needData[$k]['ctime']=time();
            $needData[$k]['type']=$_POST['radio1'];
            $needData[$k]['indentId']=$_POST['indentId'];

        }
        foreach($needData as $Nkey=>$Nval){
            $info[]  = $model->writeEstimate($Nval);
        }
        if($info){
            header('Location:/indent/index');
        }
    }
}