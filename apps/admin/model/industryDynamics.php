<?php
namespace apps\admin\model;
use core\lib\model;
class industryDynamics extends model{
  public $table = 'industry_dynamics';
  // getId
  public function getId($title){
    return $this->get($this->table,'id',['title'=>$title]);
  }

  // add
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  // sel
  public function sel($search,$type){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                title like '%$search%'
        AND  industry_type = $type        
        ORDER BY
                ctime DESC
    ";
    return $this->query($sql)->fetchAll();
  }

  // getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  // saveCp
  public function saveCp($id){
    $res = $this->update($this->table,['coverimg_path'=>''],['id'=>$id]);
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
    return $this->count($this->table,['industry_type'=>$type]);
  }

}