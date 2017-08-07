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
              FROM wechat_user WHERE openid='{$openid}'";
          return mysqli_query($this->conn,$sql)->fetch_assoc();
      }

    //若没有查询到，添加用户信息
    public function add_info($data){
        $sql="INSERT INTO wechat_user 
        (openid,nickname,sex,province,city,country,headimgurl,privilege,unionid)
         VALUES 
         ('{$data['openid']}','{$data['nickname']}',{$data['sex']}
         ,'{$data['province']}','{$data['city']}','{$data['country']}'
         ,'{$data['headimgurl']}','{$data['privilege']}','{$data['unionid']}')";
        return mysqli_query($this->conn,$sql);
    }

    //查询到了，执行更新程序
    public function update_info(){

    }
}
$db = db::getInstance();
?>