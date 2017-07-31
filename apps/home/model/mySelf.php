<?php
namespace apps\home\model;
use core\lib\model;
class mySelf extends model{
    public $table='indent';
        //查询订单对应状态数量
    public function selNum($wuid,$type){
        $sql="SELECT count(id) as num,type FROM $this->table WHERE wuid=$wuid AND type=$type AND status=0 GROUP BY type";
        if($type == 4){
            $sql="SELECT count(id) as num,type FROM $this->table WHERE wuid=$wuid AND type=$type GROUP BY type";
        }
        return $this->query($sql)->fetch('2');
    }
}