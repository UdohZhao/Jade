<?php
namespace apps\admin\model;
use core\lib\model;
class news extends model{
  public $table = 'news';
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
  public function sel($search){
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
        ORDER BY
                ctime DESC
    ";
    return $this->query($sql)->fetchAll();
  }

  // getInfo
  public function getInfo($id){
    // sql
    $sql = "
        SELECT
                N.* , A.title AS atitle
        FROM
                `$this->table` AS N
        LEFT JOIN
                `article` AS A
        ON
                N.aid = A.id
        WHERE
                1 = 1
        AND
                N.id = '$id'
    ";
    return $this->query($sql)->fetch();
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
  public function cou(){
    return $this->count($this->table);
  }

}