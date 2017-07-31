<?php
namespace apps\admin\model;
use core\lib\model;
class order extends model{
    public $table='indent';
    //查询订单方法

    public function sel($search='',$currPage='',$subPages=''){
        $info = $this->select($this->table,['[>]receiver_address'=>'wuid'],['indent.id','goods_coverpath','goods_name',
            'goods_specification','goods_quantity','goods_price','total_price',
            'serial_number','receiver_info','message','dtime','stime','ctime',
            'type','indent.status','consignee','contact_number','address'],
            ['serial_number[~]'=>$search,
            'receiver_address.status'=>1,'ORDER'=>['id'=>'DESC'],
            'LIMIT'=>[$currPage,$subPages]]);
        foreach($info as $k=>$v){
            $info[$k]['goods_coverpath']=unserialize($v['goods_coverpath']);
            $info[$k]['goods_name']=unserialize($v['goods_name']);
            $info[$k]['goods_specification']=unserialize($v['goods_specification']);
            $info[$k]['goods_quantity']=unserialize($v['goods_quantity']);
            $info[$k]['goods_price']=unserialize($v['goods_price']);
            $info[$k]['count']=count(unserialize($v['goods_name']));
            $info[$k]['address']=implode(' ',unserialize($v['address']));
            if($info[$k]['dtime']+60*30<=time() && $info[$k]['type']==0 && $info[$k]['status']==0){
                //订单超时
                $this->update($this->table,array('status'=>2),['id'=>$info[$k]['id']]);
            }
        }
        return $info;
    }

    //查看详情  id 订单id
    public function detail($id){
        $info = $this->get($this->table,['id','goods_coverpath','goods_name',
            'goods_specification','goods_quantity','goods_price','total_price',
            'serial_number','receiver_info','message','dtime','stime','ctime',
            'type','status'],
            ['id'=>$id]);
        $info['goods_coverpath']=unserialize($info['goods_coverpath']);
        $info['goods_name']=unserialize($info['goods_name']);
        $info['goods_specification']=unserialize($info['goods_specification']);
        $info['goods_quantity']=unserialize($info['goods_quantity']);
        $info['goods_price']=unserialize($info['goods_price']);
        return $info;
    }

    //发货
    public function send($id){
        //stime 发货时间   ctime 操作时间
        $sql = "UPDATE indent SET type=2,stime=".time().",ctime=".time()." WHERE id=$id";
        $info = $this->query($sql);
        if($info){
            return true;
        }else{
            return false;
        }
    }

    //退款状态修改
    public function backMoney($id,$status){
        return $this->update($this->table,['status'=>$status],['id'=>$id]);
    }
}