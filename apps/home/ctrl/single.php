<?php
class db{
    private  $conn;
    public static $instance=null;
    private function __construct(){
        $mysqli = new mysqli('112.74.46.113', 'iego', 'iego', 'jade');
        mysqli_query($mysqli,'set names utf8');
        $this->conn=$mysqli;
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
          return mysqli_query($this->conn,$sql)->fetch_assoc();
      }


}
$db = db::getInstance();
?>