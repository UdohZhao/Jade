<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\order;
use vendor\page\Page;
class orderCtrl extends baseCtrl{

    //构造方法
        public function _auto(){

        }

        //订单列表
    public function index(){
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        $status = isset($_GET['status']) ? $_GET['status'] : '';
        $info='';
        if($type){
            $info=$type;
            $this->assign('msg',$type);
        }else if($status){
            $info=$status;
            $this->assign('msg',$status);
        }
        $model=new order();
        $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
        //满足条件的记录数
        $cou =count($model->sel($search,'','',$info));
        // 数据分页
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
        // 结果集


        $res = $model->sel($search,bcsub($p->currPage,1,0),$p->subPages,$info);
        $this->assign('orderInfo',$res);
        $this->assign('page',$p->showPages(1));

        $this->display('order','index.html');
    }

    public function detail(){
        $id=$_GET['id'];
        $model= new order();
        $this->assign('orderDetail',$model->detail($id));
        $this->display('order','detail.html');
    }
    //卖家发货方法
    public function send(){
        $id=$_POST['id'];//订单id
        $model= new order();
        if($model->send($id)){
            echo json_encode(array('status'=>true,'msg'=>'订单状态已改变,请及时发货'));
        }else{
            echo json_encode(array('status'=>false,'msg'=>'稍后再试'));
        }
    }

    //卖家确认退款
    public function backMoney(){
        $status=$_POST['status'];//退款是否成功
        $id=$_POST['id'];//订单id
        $model=new order();
        if($model->backMoney($id,$status)){
            echo json_encode(array('msg'=>'订单状态已修改,请及时退款'));
        }else{
            echo json_encode(array('msg'=>'退款失败,请与买家沟通'));
        }
    }
}
