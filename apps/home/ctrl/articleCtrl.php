<?php
namespace apps\home\ctrl;
use apps\home\model\article;
class articleCtrl extends baseCtrl{
  // 构造方法
  public $wuid;
  public $suid;
  public function _auto(){

      $this->wuid=isset($_SESSION['userinfo']['wuid'])?$_SESSION['userinfo']['wuid']:'';
      $this->suid=isset($_SESSION['userinfo']['suid'])?$_SESSION['userinfo']['suid']:'';
  }

  // 文章页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:'';
        $model=new article();
        $this->assign('articleInfo',$model->sel($id));
      $this->display('article','index.html');
      die;
    }
  }

  // 文章详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $model=new article();
        $id=isset($_GET['id'])?$_GET['id']:'';
        $this->assign('detailInfo',$model->selDetail($id,$this->wuid,$this->suid));
      $this->display('article','detail.html');
      die;
    }
  }

  //为文章付费
    public function payMoney(){
        //文章id
        $id=$_POST['aid'];
        //所需金额
        $money=$_POST['money'];
        //调用对比用户余额方法
        $model=new article();

        if($model->userMoney($money,$this->wuid,$id)){
            //支付扣除成功,请求文章所有信息
            $article=$model->selDetail($id,$this->wuid,$this->suid);
            //标识下面的部分追加数据
            //去掉字符串两边的空白;
            $string = trim($article['content']);
            $seat=strpos($string,"{{昆明玉投商贸}}");
            //截取标识出现位置之后的所有字符串
            $needStr=substr($string,$seat+strlen('{{昆明玉投商贸}}'));
            echo json_encode(array('content'=>$needStr,'status'=>true));
        }else{
            //不足够支付
            echo json_encode(array('content'=>'账户余额不足','status'=>false));
        }
    }

    //使用邀请码阅读
    public function useCode(){
        //文章id
        $id=$_POST['aid'];
        $model=new article();
        $status=$model->useCode($this->suid,$this->wuid,$id);
        if($status===true){
            //邀请码使用成功,请求文章所有信息
            $article=$model->selDetail($id,$this->wuid,$this->suid);
            //匹配到标识下面的部分追加数据
            //去掉字符串两边的空白;
            $string = trim($article['content']);
            $seat=strpos($string,"{{昆明玉投商贸}}");
            //截取标识出现位置之后的所有字符串
            $needStr=substr($string,$seat+strlen('{{昆明玉投商贸}}'));
            /*$regex="/.*?<p .*? style=\".*?\">.*?<\/p>/";
            preg_match_all($regex,$needStr,$match);
            //获取所有匹配结果集[0]
            $getArr=$match[0];*/
            echo json_encode(array('content'=>$needStr,'status'=>true));
        }elseif($status===false){
            //不足够支付
            echo json_encode(array('content'=>'稍后再试','status'=>false));
        }elseif($status===intval(2)){
            //邀请码不能重复使用
            echo json_encode(array('content'=>'邀请码只能用一次,请付费阅读','status'=>false));
        }
    }
}