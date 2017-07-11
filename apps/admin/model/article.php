<?php
namespace apps\admin\model;
use core\lib\model;
class article extends model{
  public $table = 'article';
  // getTitle
  public function getTitle($title,$type){
    return $this->get($this->table,'id',['title'=>$title,'type'=>$type]);
  }

  // add
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }

  // sel
  public function sel($cid,$search,$currPage,$subPages){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                cid = '$cid'
        AND
                title like '%$search%'
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

  // 获取总记录数
  public function cou($cid){
    return $this->count($this->table,['cid'=>$cid]);
  }

  // getAid
  public function getAid($search){
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

}