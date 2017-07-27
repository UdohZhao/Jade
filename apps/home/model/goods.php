<?php
namespace apps\home\model;
use core\lib\model;
class goods extends model{
    public $table='goods';
    //展示该类的所有商品,上架状态
    public function selGood($type){
        $info = $this->select($this->table,['id','cname','cover_path'],['ORDER'=>['id'=>'DESC'],'LIMIT'=>10,'type'=>$type,'status'=>0]);
        foreach($info as $k=>$v){
            $info[$k]['cover_path']=unserialize($v['cover_path']);
        }
        return $info;
    }
    /*商品详情页面
    @param id 商品id值
     * */
    public function selDetail($id){
        $info = $this->get($this->table,['id','cname','cover_path','keywords',
            'specification','market_price',
            'promotion_price','details','inventory',
            'ctime','gtype','type'],['id'=>$id]);
        $info['cover_path']=unserialize($info['cover_path']);
        $info['specification']=unserialize($info['specification']);
        $string='';
        foreach($info['specification'] as $v){
            $string.=$v.",";
        }
        $string=rtrim($string,',');//去掉最右边的逗号 ','
        $info['specification']=$string;
        return $info;
    }
    /*商品评价
    @param id 商品id值
     * */
    public function estimate($id){
        $sql="SELECT e.id,e.uid,gid,specification,content,ctime,type,u.nickname,u.avatar_path
        FROM goods_estimate AS e
        LEFT JOIN userinfo as u ON u.uid=e.uid
        WHERE e.gid=$id";
        return $this->query($sql)->fetchAll();
    }

    //加入购物车
    public function addCar($data){
        return $this->insert('shop_cart',$data);
    }

     //购物车选择的商品展示
        /*@param id 购物车id字符串
         * */
    public function shopDetail($id){
        $info = $this->select('shop_cart',['[>]goods'=>['gid'=>'id']]
            ,['goods.id','shop_cart.id(spid)','shop_cart.specification','shop_cart.quantity','cname',
                'cover_path','promotion_price'],
            ['shop_cart.id'=>$id,'ORDER'=>['shop_cart.ctime'=>'DESC']]);
        foreach($info as $k=>$v){
            $info[$k]['cover_path']=unserialize($v['cover_path']);
        }
        return $info;
    }

        /*查询默认收货地址
        @param wuid 当前 微信用户
        status=1 默认地址
         * */
        public function myAddr($wuid){
            return $this->get('receiver_address',['id','consignee','contact_number',
                'address'],['status'=>1]);
        }
}
