<?php
namespace apps\home\model;
use core\lib\model;
class news extends model{
    public $table='news';
    // 查询新闻
    public function sel(){
        $info = $this->select($this->table,['id','aid','title','content','coverimg_path','type'],['ORDER'=>['id'=>'DESC']]);
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

     /*@param id新闻表主键
      *@param aid 关联文章表主键
      * */
    public function selDetail($id,$aid=0){
                return $this->get($this->table,['id','title','content','ctime','type'],['id'=>$id]);
    }
}