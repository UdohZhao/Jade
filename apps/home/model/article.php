<?php
namespace apps\home\model;
use core\lib\model;
class article extends model{
    public $table='article';
    public function sel($id){
        // @param id 目录id值
        $sql="SELECT id,title,content,type,price,ctime FROM $this->table WHERE cid=$id";
        return $this->query($sql)->fetchAll();
    }
    public function selDetail($id){
        //@param 文章id值
        $info = $this->get($this->table,['content','type','title','price','ctime'],['id'=>$id]);
       //若为付费阅读,查询用户是否已经付费
        $status='用户是否为本章节付费';

            $info['content']=mb_substr($info['content'],0,500,'utf-8');
        
        return $info;
    }
}