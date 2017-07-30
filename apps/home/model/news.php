<?php
namespace apps\home\model;
use core\lib\model;
use Symfony\Component\VarDumper\Cloner\VarCloner;

class news extends model{
    public $table='news';
    // 查询新闻
    public function sel(){
        $info = $this->select($this->table,['id','aid','title','content','coverimg_path','type'],['ORDER'=>['id'=>'DESC'],'LIMIT'=>10]);
        //遍历获取内容处理
        foreach($info as $k=>$v){
            //标识第一次出现的位置
            if($v['aid']){
                $article=$this->get('article',['content'],['id'=>$v['aid']]);
                $v['content']=$article['content'];
            }
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
        $info = $this->get($this->table,['id','title','content','ctime','type'],['id'=>$id]);
        //判断是否是付费文章,$aid=0即不为付费文章
        if($info['type']==0){
            return $info;
        }else{
            //跳转到链接文章页面
            header('Location:/article/detail?id='.$aid);
            die;
        }
    }

    /*新闻列表追加
    @param page自定义页数
     * */
    function moreData($page){
        $info = $this->select($this->table,['id','aid','title','content','coverimg_path','type'],['ORDER'=>['id'=>'DESC'],'LIMIT'=>[$page*10,10]]);
        foreach($info as $k=>$v){

            if($v['aid']){
                $article=$this->get('article',['content'],['id'=>$v['aid']]);
                $v['content']=$article['content'];
            }
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