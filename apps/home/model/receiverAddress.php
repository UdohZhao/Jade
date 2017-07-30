<?php
namespace apps\home\model;
use core\lib\model;
class receiverAddress extends model{
    public $table='receiver_address';
    //查询该用户的收货地址  $wuid  微信用户id
    public function sel($wuid){
        $info = $this->select($this->table,['id','consignee','contact_number','address','status'],['wuid'=>$wuid]);
        foreach($info as $k=>$v){
            $info[$k]['address']=implode(' ',unserialize($v['address']));
        }
        return $info;
    }

    //添加地址 @param data 信息数组
    public function add($data){
      return  $this->insert($this->table,$data);
    }

    //查询是否有默认地址
    public function checkedAdd(){
        return $this->get($this->table,['id'],['status'=>1]);
    }

    //修改地址默认状态 @param id 地址的id
    public function updateStatus($id){
        return $this->update($this->table,['status'=>0],['id'=>$id]);
    }

    //地址列表 @param wuid 当前微信用户的id
    public function addrList($wuid){
        $info = $this->select($this->table,['id','consignee',
            'contact_number','address','status'],['wuid'=>$wuid]);
        foreach($info as $k=>$v){
            $info[$k]['address']=implode(' ',unserialize($v['address']));
        }
        return $info;
    }

    /*查询需要编辑的地址
    @param id 选择的地址id
     * */
    public function thisAddr($id){
        $info = $this->get($this->table,['id','consignee',
            'contact_number','address','status'],['id'=>$id]);
        $info['address']=unserialize($info['address']);
        return $info;
    }

    //修改数据
    public function updateAddr($id,$data){
        return $this->update($this->table,$data,['id'=>$id]);
    }

    //删除数据
    public function del($id){
        return $this->delete($this->table,['id'=>$id]);
    }
}