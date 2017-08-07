<?php
namespace apps\home\model;
use core\lib\model;
class indent extends model{
    public $table='indent';

    //查询该用户的订单信息  @param wuid 微信用户id
    public  function sel($wuid,$type=''){
        if($type===''){
            $where=['wuid'=>$wuid,'ORDER'=>['id'=>'DESC']];
        }else if($type==4){
            $where=['AND'=>['wuid'=>$wuid,'type'=>$type],'ORDER'=>['id'=>'DESC']];
        }else{
            $where=['AND'=>['wuid'=>$wuid,'type'=>$type,'status'=>0],'ORDER'=>['id'=>'DESC']];
        }
        $info = $this->select($this->table,['id','goods_coverpath','goods_name',
        'goods_specification','goods_quantity','goods_price','total_price',
        'serial_number','receiver_info','message','dtime','stime','ctime',
        'type','status'],$where);
        foreach($info as $k=>$v){
            $info[$k]['goods_coverpath']=unserialize($v['goods_coverpath']);
            $info[$k]['goods_name']=unserialize($v['goods_name']);
            $info[$k]['goods_specification']=unserialize($v['goods_specification']);
            $info[$k]['goods_quantity']=unserialize($v['goods_quantity']);
            $info[$k]['goods_price']=unserialize($v['goods_price']);
            $info[$k]['count']=count(unserialize($v['goods_name']));
            if($info[$k]['dtime']+60*30<=time() && $info[$k]['type']==0 && $info[$k]['status']==0){
                //订单超时,半个小时
                $this->update($this->table,array('status'=>2),['id'=>$info[$k]['id']]);
            }
            if($info[$k]['dtime']+3600*24<=time()  && $info[$k]['type']==0 && $info[$k]['status']==0){
                //删除
                $this->delete($this->table,['id'=>$info[$k]['id']]);
            }
        }
        return $info;
    }

    //订单详情 id 订单id
    public function orderDetail($id,$wuid){
        $info = $this->get($this->table,['[>]receiver_address'=>'wuid'],['indent.id','goods_coverpath','goods_name',
            'goods_specification','goods_quantity','goods_price','total_price',
            'serial_number','receiver_info','message','dtime','stime','ctime',
            'type','indent.status',
            'consignee','contact_number','address'],['AND'=>['indent.id'=>$id,'receiver_address.wuid'=>$wuid,'receiver_address.status'=>1]]);
            $info['goods_coverpath']=unserialize($info['goods_coverpath']);
            $info['goods_name']=unserialize($info['goods_name']);
            $info['goods_specification']=unserialize($info['goods_specification']);
            $info['goods_quantity']=unserialize($info['goods_quantity']);
            $info['goods_price']=unserialize($info['goods_price']);
            $info['address']=implode(' ',unserialize($info['address']));
        return $info;
    }

    /*支付方法
    @param id 订单id
     * */
    public  function buy($id){
        if($this->orderStatus($id)){
            //修改当前订单状态
            $info = $this->update($this->table,array('type'=>1),['id'=>$id]);
           
        }
    }
    //查看订单是否超时
    private function orderStatus($id){
        $info = $this->get($this->table,['status'],['id'=>$id]);
        if($info['status'] == 2){
            //订单超时
            return false;
        }else{
            return true;
        }
    }
    /*买家确认收货方法,即进入评价,发货状态由后台操作
    @param id 订单id
     * */
    public function hasGot($id){
        $info = $this->update($this->table,['type'=>3],['id'=>$id]);
        if($info){
            return array('status'=>true,'msg'=>'感谢您的支持,评价一下吧');
        }else{
            return array('status'=>false,'msg'=>'操作失败,稍后再试');
        }
    }

    //查询买家是否有默认地址
    public function defaultAddr($wuid){
        return  $this->get('receiver_address',['address'],['AND'=>['status'=>1,'wuid'=>$wuid]]);
    }

    //买家点击退款
    public function backMoney($id){
        $info = $this->update($this->table,['status'=>3],['id'=>$id]);
        if($info){
            return array('status'=>true,'msg'=>'退款申请成功,待卖家处理');
        }else{
            return array('status'=>false,'msg'=>'申请失败,稍后再试');
        }
    }
    //订单取消
    public function cancel($id){
        $info = $this->update($this->table,['status'=>1],['id'=>$id]);
        if($info){
            return array('status'=>true,'msg'=>'订单已取消');
        }else{
            return array('status'=>false,'msg'=>'稍后再试');
        }
    }



    //查询订单商品名称
    public function sel_name($id){
        $info = $this->get('indent',['goods_name','serial_number'],['id'=>$id]);
        $info['goods_name']=implode('  ',unserialize($info['goods_name']));
        return $info;
    }
}