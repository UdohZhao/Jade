<?php
namespace apps\home\model;
use core\lib\model;
class shop extends model{
    public $table='goods';
    //展示所有商品,上架状态
    public function AllGood($keyword=''){
        if(!$keyword){
            $info = $this->select($this->table,['id','cname','cover_path'],['ORDER'=>['id'=>'DESC'],'LIMIT'=>10,'status'=>0]);
            foreach($info as $k=>$v){
                $info[$k]['cover_path']=unserialize($v['cover_path']);
            }
        }else{
           $info=$this->select($this->table,['id','cname','cover_path'],["keywords[~]"=>$keyword]);
            foreach($info as $k=>$v){
                $info[$k]['cover_path']=unserialize($v['cover_path']);
            }
        }
        return $info;
    }
}