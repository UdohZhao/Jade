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
            $wuid=$_SESSION['userinfo']['wuid'];
            //该用户关联的客服用户id
            $suid=$_SESSION['userinfo']['suid'];

            if($wuid && $suid){

                //用户关注过该平台,切有客服推荐
                $expense = $this->isFee($id,$wuid);  //消费记录
                if($expense){
                    $payForIt = $this->belong_array($expense,0); //是否是付费
                    $workForIt = $this->belong_array($expense,1);// 是否是工作号阅读
                    if($payForIt){
                        //付费阅读直接返回该文章的所有信息
                        return $info;
                    }elseif($workForIt && !$payForIt){
                        //$info['content']=mb_substr($info['content'],0,500,'utf-8');
                        $info['content'] = $this->handleArticle($info['content']);
                        return $info;
                    }
                }else{
                    //没有消费记录,判该文章是否为工作号指定阅读文章
                    if($info['type']==1){
                        //此处则有一次工作号阅读机会
                        $info['content']=mb_substr($info['content'],0,500,'utf-8');
                        $info['read_status']='jobNum';//记录需要工作号免费阅读代码
                        return $info;
                    }else{
                        //付费才可阅读
                        $info['content']=mb_substr($info['content'],0,1000,'utf-8');
                        return $info;
                    }

                }
            }elseif($wuid && !$suid){

                //没有推荐人
                $expense = $this->isFee($id,$wuid);  //消费记录
                $payForIt = $this->belong_array($expense,0); //是否是付费
                if($payForIt){
                    //付费阅读直接返回该文章的所有信息
                    return $info;
                }else{
                    $info['content']=mb_substr($info['content'],0,500,'utf-8');
                    return $info;
                }
            }elseif(!$wuid){
                //没有关注信息
                $info['content']=mb_substr($info['content'],0,500,'utf-8');
                return $info;
            }
    }

    //查询该用户该文章付费记录
    private function isFee($aid,$wuid=''){
        $where='';
        if(!$wuid){
            $where=['aid'=>$aid];
        }else{
            $where=['AND'=>['aid'=>$aid,'wuid'=>$wuid]];
        }
        $info = $this->select('read_expense',['id','aid','money','ctime','type'],$where);
        return $info;
    }

    //判断值是否在二维数组中
    private function belong_array($arr,$value){
        foreach($arr as $v){
            if(in_array($value,$v)){
                return true;
            }else{
                continue;
            }
        }
        //循环体外
        return false;
    }

    //处理文章方法
    private function handleArticle($str){
        $seat=strpos($str,"{{昆明玉投商贸}}");
        //截取标识出现位置之后的所有字符串
        $needStr=substr($str,$seat+strlen('{{昆明玉投商贸}}'));
        //去掉编辑器自带的所有html标签属性
        $string = trim($needStr);
        $string= preg_replace("/<([a-zA-Z]+)[^>]*>/","",$string);
        $string = strip_tags($string,"");
        $string=mb_substr($string,0,500,'utf-8').'...';
        return $string;
    }
}