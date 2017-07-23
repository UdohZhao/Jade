<?php
namespace apps\home\model;
use core\lib\model;
class index extends model{
    //最新新闻
    public function selNews(){
        $info = $this->select('news',['id','title','coverimg_path','content','aid','type'],['ORDER'=>['id'=>'DESC'],'LIMIT'=>10]);
        //遍历获取内容处理
        foreach($info as $k=>$v){
            //标识第一次出现的位置
            $seat=strpos($v['content'],"{{昆明玉投商贸}}");
            //截取标识出现位置之后的所有字符串
            $needStr=substr($v['content'],$seat);
            //去掉编辑器自带的所有html标签属性
            $str = trim($needStr);
            $str= preg_replace("/<([a-zA-Z]+)[^>]*>/","",$str);
            $str = strip_tags($str,"");
            $str=mb_substr($str,0,50,'utf-8').'...';
            $info[$k]['content']=$str;
        }
        return $info;
    }
}