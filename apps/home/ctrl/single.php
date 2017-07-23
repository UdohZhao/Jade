<?php
use core\lib\model;
class db extends model{
    public $conn;
    public static $sql;
    public static $instance=null;
    private function _auto(){
        $this->conn = mysql_connect('112.74.46.113','iego','iego');
        if(!mysql_select_db('jade',$this->conn)){
            return false;
        };
        mysql_query('set names utf8',$this->conn);
    }
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new db;
        }
        return self::$instance;
    }
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