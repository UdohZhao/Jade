<?php
namespace apps\home\model;
use core\lib\model;
class article extends model{
    public $table='article';
    public function sel($id){
        // @param id 目录id值
        $sql="SELECT id,title,content,type,price,ctime FROM $this->table WHERE cid=$id ORDER BY ctime DESC";
        return $this->query($sql)->fetchAll();
    }
    /*文章详情
    @param  id  文章id
    @param  wuid 微信用户id
    @param  suid 该微信用户的推荐客服id
     * */
    public function selDetail($id,$wuid,$suid){
        //@param 文章id值
        $info = $this->get($this->table,['id','content','type','title','price','ctime'],['id'=>$id]);
       //若为付费阅读,查询用户是否已经付费
            if($wuid && $suid){
                //用户关注过该平台,且有客服推荐
                $expense = $this->isFee($id,$wuid);  //消费记录
                if($expense){
                   // $payForIt = $this->belong_array($expense,0); //是否是付费
                    // $workForIt = $this->belong_array($expense,1);// 是否是工作号阅读
                    //有消费记录,直接返回文章阅读
                    //赋值无需付费标识
                    $info['needMoney']=false;
                    return $info;
                }else{
                    //没有消费记录,判该文章是否为工作号指定阅读文章
                    if($info['type']==1){
                        //此处则可以用工作号阅读机会
                        $info['content'] = $this->handleArticle($info['content']);
                        //赋值需要工作号免费阅读代码
                        $info['needJobCode']=true;
                        return $info;
                    }else{
                        //付费才可阅读
                        $info['content'] = $this->handleArticle($info['content']);
                        //赋值需要付费阅读标识
                        $info['needMoney']=true;
                        return $info;
                    }

                }
            }elseif($wuid && !$suid){
                //没有推荐人
                $expense = $this->isFee($id,$wuid);  //消费记录
                $payForIt = $this->belong_array($expense,0); //是否是付费
                if($payForIt){
                    //付费阅读直接返回该文章的所有信息
                    $info['needMoney']=false;
                    return $info;
                }else{
                    $info['content'] = $this->handleArticle($info['content']);
                    $info['needMoney']=true;
                    return $info;
                }
            }elseif(!$wuid){
                //没有关注信息
                $info['content'] = $this->handleArticle($info['content']);
                $info['needMoney']=true;
                return $info;
            }
    }

    //查询该用户该文章付费记录
    private function isFee($aid,$wuid=''){
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
        $needStr=substr($str,0,$seat+strlen('{{昆明玉投商贸}}'));
        return $needStr;
        //去掉字符串两边的空白;
        /*$string = trim($needStr);
        $regex="/.*?<p .*? style=\".*?\">.*?<\/p>/";
        preg_match_all($regex,$string,$match);
        //获取匹配结果集[0]
        $getArr=$match[0];
        if(count($getArr)>5){
            $getArr=array_slice($getArr,0,5);
        }
        //需要的字符串
        $getStr='';
        foreach($getArr as $v){
            $getStr.=$v;
        }
        return $getStr.'......';*/
    }

    //对比账户余额并扣除所需金额方法
    /*@param money 所需金额
      @param wuid 当前微信用户id
      @param aid 所选择的文章id
     * */
    public function userMoney($money,$wuid,$aid){
        $info=$this->get('userinfo',['id','wuid','remaining'],['wuid'=>$wuid]);
        if(bccomp($info['remaining'],$money, 2)>=0){
            //账户余额足够支付,则扣除账户余额,
            $remainder = bcsub($info['remaining'], $money, 2);//剩余余额
            //修改账户余额
            $res=$this->update('userinfo',['remaining'=>$remainder],['wuid'=>$wuid]);
            //增加阅读文章消费记录
            $result=$this->insert('read_expense',['wuid'=>$wuid,'aid'=>$aid,'money'=>$money,'ctime'=>time(),'type'=>0]);
           if($result && $res){
               return true;
           }
        }else{
            //不足以支付当前所需付费
            return false;
        }
    }

    //使用邀请码查询
    /*@param suid 该用户关联的客服用户id
    @param wuid 微信用户id
    @param aid 文章id
     * */
    public function useCode($suid,$wuid,$aid){
        //判断客服用户id的工作号
        //查询该工作号是否已被该用户使用过
        $info=$this->get('read_expense',['id','wuid','ctime','aid','type'],['wuid'=>$wuid,'type'=>1]);
        if($info){
            //若查询到,则不能再次使用
            return  intval(2); //不能使用两次
        }
        if($suid){
            //记录工作码阅读记录
            $res=$this->insert('read_expense',['wuid'=>$wuid,'aid'=>$aid,'money'=>0,'ctime'=>time(),'type'=>1]);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }
}