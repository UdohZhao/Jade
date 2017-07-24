<?php
use core\lib\model;
class db extends model{
    public static $instance=null;
    private function _auto(){

    }
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new db;
        }
        return self::$instance;
    }
    private function __clone() {}  //覆盖__clone()方法，禁止克隆
    /**
     * 查询数据库
     */
      public function sel($openid){
          $sql="SELECT id,suid,nickname,sex,province,city,country
                ,headimgurl,privilege,unionid 
              FROM wechat_user WHERE openid=$openid";
          return $this->query($sql)->fetch();
      }

}
$db = db::getInstance();
?>