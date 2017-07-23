<?php
namespace apps\home\model;
use core\lib\model;
class industryDynamics extends model{
    public $table='industry_dynamics';
    public function sel(){
        return $this->select($this->table,['id','title','coverimg_path','content','ctime'],'');
    }

    /*行业详情
    @param id 行业动态id值
     * */
     public function selDetail($id){
         return $this->get($this->table,['title','content','ctime'],['id'=>$id]);
     }
}