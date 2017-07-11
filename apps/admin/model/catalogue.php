<?php
namespace apps\admin\model;
use core\lib\model;
class catalogue extends model{
  public $table = 'catalogue';
  // add
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  // getTitle
  public function getTitle($title,$type){
    return $this->select($this->table,'id',array('title'=>$title,'type'=>$type));
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
                title like '%$search%'
        ORDER BY
                sort ASC
        LIMIT
                $currPage , $subPages
    ";
    return $this->query($sql)->fetchAll();
  }

  // getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',array('id'=>$id));
  }

  // save
  public function save($id,$data){
    $res = $this->update($this->table,$data,array('id'=>$id));
    return $res->rowCount();
  }

  // del
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

  // 获取总记录数
  public function cou(){
    return $this->count($this->table);
  }

}