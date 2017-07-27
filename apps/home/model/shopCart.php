<?php
namespace apps\home\model;
use use core\lib\model;
class shopCart extends model{
    public $table='shop_cart';
    /*查询购物车
    ＠param wuid 微信用户id
     * */
    public function selShopcar($wuid){
        return $this->select($this->table,['[>]goods'=>['gid'=>'id']]);
    }

}