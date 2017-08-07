<?php
namespace apps\home\ctrl;
use core\lib\conf;
// 接入微信公众平台 TOKEN
define('TOKEN', 'bainianfc');
class baseCtrl extends \core\icunji{
  // 构造方法
  public function _initialize(){
    // expires_in
      // 初始化控制器
      if(!isset($_SESSION['userinfo'])){
          header('Location:/index/index');
      }

    if ( !isset($_SESSION['accesstoken']) || $_SESSION['accesstoken']['expires_in'] < time() ) {
      $accesstoken = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.conf::get('APPID','wechat').'&secret='.conf::get('APPSECRET','wechat');
      // 获取access_token
      $accesstoken = json_decode(file_get_contents($accesstoken),true);
      $accesstoken['expires_in'] = bcadd(time(), $accesstoken['expires_in'], 0);
      $_SESSION['accesstoken'] = $accesstoken;
    }
        $is_set=isset($_SESSION['openInfo'])?$_SESSION['openInfo']:false;
      if(!$is_set){
          $this->requestWecaht();
      }


      if(method_exists($this,'_auto'))
          $this->_auto();
  }

  // 微信中控
  public function ccontrol(){
    // 接入微信公众平台
    include ICUNJI.'/vendor/WechatCallbackApi/WechatCallbackApi.php';
    $WechatObj = new \WechatCallbackApi();
    if (!isset($_GET['echostr'])) {
      $WechatObj->responseMsg();
    }else{
      $WechatObj->valid();
    }
  }

  // 请求微信用户授权接口
  public function requestWecaht(){
    // 必须使用微信浏览器打开
    if ( IS_WECHAT === true ) {
      header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid='.conf::get('APPID','wechat').'&redirect_uri='.conf::get('REDIRECT_URI','wechat').'&response_type=code&scope=snsapi_userinfo&state=A#wechat_redirect');
    } else {
      echo '请使用微信浏览器打开 :(';
      die;
    }
  }

  // 获取微信用户信息
  public function getWecahtUserInfo(){
    // 必须使用微信浏览器打开
    if ( IS_WECHAT === true ) {
      // 获取access_token，openid
      $res = json_decode(file_get_contents('https://api.weixin.qq.com/sns/oauth2/access_token?appid='.conf::get('APPID','wechat').'&secret='.conf::get('APPSECRET','wechat').'&code='.$_GET['code'].'&grant_type=authorization_code'),true);
      // 获取用户信息
      $res = json_decode(file_get_contents('https://api.weixin.qq.com/sns/userinfo?access_token='.$res['access_token'].'&openid='.$res['openid'].'&lang=zh_CN'),true);

        see($res);
        if($res){
            $_SESSION['openInfo']=$res;
            header('Location:/index/index');
        }else{
            $_SESSION['openInfo']='';
        }

      die;
      // 执行数据库操作coding ...
    } else {
      echo '请使用微信浏览器打开 :(';
      die;
    }
  }

}