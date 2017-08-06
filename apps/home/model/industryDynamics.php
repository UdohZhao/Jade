<?php
namespace apps\home\model;
use core\lib\model;
class industryDynamics extends model{
    public $table='industry_dynamics';
    public function sel($type){
        $info = $this->select($this->table,['id','title','coverimg_path','content','ctime'],['LIMIT'=>10,'industry_type'=>$type]);
        foreach($info as $k=>$v){
            //去掉编辑器自带的所有html标签属性
            $str = trim($v['content']);
            $str= preg_replace("/<([a-zA-Z]+)[^>]*>/","",$str);
            $str = strip_tags($str,"");
            $str=mb_substr($str,0,50,'utf-8').'...';
            $info[$k]['content']=$str;
        }
        return $info;
    }

    /*行业详情
    @param id 行业动态id值
     * */
     public function selDetail($id){
         return $this->get($this->table,['title','content','ctime'],['id'=>$id]);
     }

     /*行业列表追加
     @param page自定义页数
      * */
     function moreData($page,$type){
         $info = $this->select($this->table,['id','title','coverimg_path','content','ctime'],['LIMIT'=>[$page*10,10],'industry_type'=>$type]);
         foreach($info as $k=>$v){
             //去掉编辑器自带的所有html标签属性
             $str = trim($v['content']);
             $str= preg_replace("/<([a-zA-Z]+)[^>]*>/","",$str);
             $str = strip_tags($str,"");
             $str=mb_substr($str,0,50,'utf-8').'...';
             $info[$k]['content']=$str;
         }
         return $info;
     }
}