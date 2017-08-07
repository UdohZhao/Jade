<?php
namespace apps\admin\model;
use core\lib\model;
class serviceUser extends model{
  public $table = 'service_user';
  // add
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  // sel
  public function sel($pid,$search){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                pid = '$pid'
        AND
                cname like '%$search%'
        ORDER BY
                income DESC
    ";
    return $this->query($sql)->fetchAll();
  }

  // getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  // save
  public function save($id,$password){
    // data
    $data = array();
    $data['password'] = $password;
    $data['ctime'] = time();
    // update
    $res = $this->update($this->table,$data,array('id'=>$id));
    return $res->rowCount();
  }

  // flag
  public function flag($id,$status){
    $res = $this->update($this->table,array('status'=>$status,'ctime'=>time()),array('id'=>$id));
    return $res->rowCount();
  }

  // 删除
  public function del($id){
    $res = $this->delete($this->table,array('id'=>$id));
    return $res->rowCount();
  }

  // 获取总记录数
  public function cou($pid){
    return $this->count($this->table,['pid'=>$pid]);
  }

  // getId
  public function getId($cname,$jobnumber){
    // sql
    $sql = "
        SELECT
                id
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                (cname = '$cname' OR jobnumber = '$jobnumber')
    ";
    return $this->query($sql)->fetch();
  }

  // 查询下级
  public function couJunior($id){
    return $this->count($this->table,['pid'=>$id]);
  }

  //查询打款记录
    public function paycord($id){
        //客服id
        $sql = "SELECT remittance_record.*,service_user.cname,jobnumber FROM remittance_record
            JOIN service_user ON service_user.id=remittance_record.suid WHERE remittance_record.suid=$id";
        return $this->query($sql)->fetchAll();
    }
    //添加打款记录  id 客服id
    public function payMoney($id){
       //查询该客服的记录
        $info = $this->get($this->table,'*',['id'=>$id]);
        if($info['income']==0){
            return array('msg'=>'客服无金额');
        }else{
            //清除客服收入,并记录打款
            $re = $this->insert('remittance_record',['suid'=>$id,'money'=>$info['income'],'ctime'=>time()]);
            $res = $this->update($this->table,['income'=>0.00],['id'=>$id]);
            if($re && $res){
                return array('msg'=>'已添加打款记录,请及时打款');
            }
        }
    }
}

