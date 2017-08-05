<?php
namespace apps\admin\model;
use core\lib\model;
class banner extends model{
    //查找付费文章id,名称
    public  function article(){
        return $this->select('article',['id','title'],['type'=>0]);
    }

    //保存入库
    public function add($data){
        return $this->insert('banner',$data);
    }

    public function sel_banner(){
        $info = $this->select('banner',['[>]article'=>['aid'=>'id']],
            ['banner.id','banner.banner','banner.sort','article.title'],['ORDER'=>'banner.sort']);
       foreach($info as $k=>$v){
           $info[$k]['banner']=unserialize($v['banner'])[0];
       }
        return $info;
    }
}