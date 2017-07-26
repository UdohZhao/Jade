<?php
namespace apps\home\model;
use core\lib\model;
class account extends model{
    public $table='userinfo';
    //获取账户余额
    /*@param wuid 当前微信用户的uid
     * */
    public function selInfo($wuid){
        return $this->get($this->table,['id','remaining'],['wuid'=>$wuid]);
    }

    /*用户充值
    @param wuid 当前微信用户id
    @param money 充值金额
    @param suid 该用户关联的客服id
     * */
    public function recharge($wuid,$money,$suid=''){
        //查找是否为首次充值,
        $is_charge=$this->select('pay_record',['id','money','ctime','type'],['wuid'=>$wuid]);
        if(!$is_charge && $suid){
            //表示首次充值,且有推荐人
            //获取首次充值使用邀请码的优惠百分比
            $divide=$this->divide()['pay'];
            //计算实际支付的金额,原来金额数乘上优惠后的百分比
            $payMoney=bcmul($money,bcsub(1,bcdiv($divide,100,2),2),2);
            //调用微信支付函数
            $status=true;//模拟充值成功,支付金额为实际支付金额,即$payMoney
            if($status){
                //首次充值系统自动使用邀请码,优惠5%,记录充值信息,并且分成给当前客服id,存入金额为充值金额
                $re=$this->insert('pay_record',['money'=>$money,'ctime'=>time(),'type'=>1,'wuid'=>$wuid]);
                //计算客服实际应得的金额,先判断客服账号状态
                if($this->serviceInfo($suid)['status']==0 && $this->serviceInfo($suid)){
                    //正常状态,分成给客服,获取提成百分比
                    $service_divide=$this->divide()['royalties'];
                    $serviceMoney=bcmul($payMoney,bcdiv($service_divide,100,2),2);
                    // 客服存入的最终余额
                    $finalMoney=$serviceMoney;
                    //修改客服收入余额;
                    $res=$this->update('service_user',['income'=>$finalMoney],['id'=>$suid]);
                }
                   return array('status'=>true,'msg'=>'first','divide'=>$divide);
            }else{
                return false;
            }

        }else if($is_charge){
            //有记录情况直接记录充值记录,获取当前用户余额
            $nowMoney=$this->selInfo($wuid);
            $allMoney=bcadd($nowMoney['remaining'],$money,2);
            //调用充值函数
            $status=true;
            if($status){
               //保存账户余额
                $result = $this->update($this->table,['remaining'=>$allMoney],['wuid'=>$wuid]);
                return array('status'=>true,'msg'=>'');
            }else{
                return false;
            }
        }
    }

    //查询网站提成信息
    private function divide(){
        return $this->get('website_config','*',['ORDER'=>['id'=>'DESC']]);
    }
    //查询客服信息
    /*@param suid 当前用户的推荐用户id,即客服id
     * */
    private function serviceInfo($suid){
        return $this->get('service_user',['pid','jobnumber','cname','income','ctime','status'],['id'=>$suid]);
    }
}