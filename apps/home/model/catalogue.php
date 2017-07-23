<?php
namespace apps\home\model;
use core\lib\model;
class catalogue extends model{
    public $table='catalogue';
    public function sel($type){
        return $this->select($this->table,["id",'title','sort','type'],['type'=>$type]);
    }
}