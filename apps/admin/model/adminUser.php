<?php
namespace apps\admin\model;
use core\lib\model;
class adminUser extends model{
  public $table = 'admin_user';
  // getOne
  public function getOne($data){
    // data
    $username = $data['username'];
    $password = $data['password'];
    // sql
    $sql = "SELECT * FROM `$this->table` WHERE 1 = 1 AND username = '$username' AND password = '$password'";
    return $this->query($sql)->fetch();
  }

  // add
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  // sel
  public function sel($search,$currPage,$subPages){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
              1 = 1
        AND
              username like '%$search%'
        ORDER BY
                ctime DESC
        LIMIT
                $currPage , $subPages
    ";
    return $this->query($sql)->fetchAll();
  }

  // getInfo
  public function getInfo($id){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                id = '$id'
    ";
    return $this->query($sql)->fetch();
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
  public function cou(){
    return $this->count($this->table);
  }

}

