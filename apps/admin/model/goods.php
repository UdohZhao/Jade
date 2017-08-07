<?php
namespace apps\admin\model;
use core\lib\model;
class goods extends model{
  public $table = 'goods';
  // add
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  // getId
  public function getId($cname){
    return $this->get($this->table,'id',['cname'=>$cname]);
  }

  // sel
  public function sel($type,$search,$currPage,$subPages){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                type = '$type'
        AND
                cname like '%$search%'
        ORDER BY
                ctime DESC
        LIMIT
                $currPage , $subPages
    ";
    return $this->query($sql)->fetchAll();
  }

  // getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  // saveCp
  public function saveCp($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  // save
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  // del
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

  // cou
  public function cou($type){
    return $this->count($this->table,['type'=>$type]);
  }


}