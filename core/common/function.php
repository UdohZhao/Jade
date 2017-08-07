<?php
use vendor\fileupload\fileupload;
/**
 * 浏览器友好的变量输出
 * @param mixed $var 变量
 * @param boolean $echo 是否输出 默认为True 如果为false 则返回输出字符串
 * @param string $label 标签 默认为空
 * @param boolean $strict 是否严谨 默认为true
 * @return void|string
 */
function see($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    }else
        return $output;
}

/**
 * 是否是AJAx提交的
 * @return bool
 */
function isAjax(){
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        return true;
    }else{
        return false;
    }
}

/**
 * 是否是GET提交的
 * @return bool
 */
function isGet(){
    return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
}

/**
 * 是否是POST提交
 * @return bool
 */
function isPost() {
    return $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
}

// PHP无敌加密
function enPassword($password){
    return md5(crypt($password,substr($password,0,2)));
}

// 上传文件
function upFiles($file){
    // 文件上传
    $up = new FileUpload();
    $res = array();
    if ($up->upload($file)) {
      $res['error'] = 0;
      // 多文件上传?
      if (is_array($up->getFileName())) {
        foreach ($up->getFileName() AS $k => $v) {
          $res['cover_path'][] = '/admin/uploads/'.$v;
        }
        //$res['cover_path'] = serialize($res['cover_path']);
      } else {
        $res['cover_path'][] = $up->getFileName();
      }
    } else {
      $res['error'] = 1;
      $res['msg'] = $up->getErrorMsg();
    }
    return $res;
}

// 生成订单号
function indent_number(){
    return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
}

// curl，POST请求
function https_request($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}
// curl，GET请求
function https_get($url){
    //初始化
    $ch = curl_init();
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    return $output;
}
// 判断微信浏览器
function isWechat(){
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true;
    } return false;
}


/**
 * 微信JsApi支付
 * @param  string   $openId     openid
 * @param  string   $goods      商品名称
 * @param  string   $order_sn   订单号
 * @param  string   $total_fee  金额
 * @param  string   $attach     附加参数,我们可以选择传递一个参数,比如订单ID
 */
function wxJsapiPay($openId,$goods,$order_sn,$total_fee,$attach){
    include ICUNJI.'/vendor/wxpay/WxPay.Api.php';
    include ICUNJI.'/vendor/wxpay/WxPay.JsApiPay.php';
    include ICUNJI.'/vendor/wxpay/log.php';

    //初始化日志
    $logHandler= new \CLogFileHandler("./log/".date('Ymd').'.log');
    $log = \Log::Init($logHandler, 15);

    $tools = new \JsApiPay();
    if(empty($openId)) $openId = $tools->GetOpenid();

    $input = new \WxPayUnifiedOrder();
    $input->SetBody($goods);                 //商品名称
    $input->SetAttach($attach);                  //附加参数,可填可不填,填写的话,里边字符串不能出现空格
    $input->SetOut_trade_no($order_sn);          //订单号
    $input->SetTotal_fee($total_fee);            //支付金额,单位:分
    $input->SetTime_start(date("YmdHis"));       //支付发起时间
    $input->SetTime_expire(date("YmdHis", time() + 600));//支付超时
    $input->SetGoods_tag("test3");
    //$input->SetNotify_url("http://".$_SERVER['HTTP_HOST']."/payment.php");  //支付回调验证地址
    $input->SetNotify_url("http://".$_SERVER['SERVER_NAME']."/Wechatpay/notify");
    $input->SetTrade_type("JSAPI");              //支付类型
    $input->SetOpenid($openId);                  //用户openID
    $order = \WxPayApi::unifiedOrder($input);    //统一下单

    $jsApiParameters = $tools->GetJsApiParameters($order);

    return $jsApiParameters;
}

/**
 * 微信Native支付
 * @param  string   $goods      商品名称
 * @param  string   $order_sn   订单号
 * @param  string   $total_fee  金额
 * @param  string   $productId  商品id
 * @param  string   $attach     附加参数,我们可以选择传递一个参数,比如订单ID
 */
function wxNativePay($goods,$order_sn,$total_fee,$productId,$attach,$controller){

    include ICUNJI.'/vendor/wxpay/WxPay.Api.php';
    include ICUNJI.'/vendor/wxpay/WxPay.NativePay.php';
    include ICUNJI.'/vendor/wxpay/log.php';

    //初始化日志
    $logHandler= new \CLogFileHandler("./log/".date('Ymd').'.log');
    $log = \Log::Init($logHandler, 15);

    $notify = new \NativePay();

    // 统一下单
    $input = new \WxPayUnifiedOrder();
    $input->SetBody($goods);                 //商品名称
    $input->SetAttach($attach);                  //附加参数,可填可不填,填写的话,里边字符串不能出现空格
    $input->SetOut_trade_no($order_sn);          //订单号
    $input->SetTotal_fee($total_fee);            //支付金额,单位:分
    $input->SetTime_start(date("YmdHis"));       //支付发起时间
    $input->SetTime_expire(date("YmdHis", time() + 600));//支付超时
    $input->SetGoods_tag("test3");
    //$input->SetNotify_url("http://".$_SERVER['HTTP_HOST']."/payment.php");  //支付回调验证地址
    $input->SetNotify_url("http://".$_SERVER['SERVER_NAME']."/".$controller."/notify");
    $input->SetTrade_type("NATIVE");              //支付类型

    $input->SetProduct_id($productId);
    $result = $notify->GetPayUrl($input);
    return $result["code_url"];
}


/**
 * 生成签名
 * @return 签名，本函数不覆盖sign成员变量
 */
function makeSign($data){
    //获取微信支付秘钥
    include ICUNJI.'/vendor/wxpay/WxPay.Api.php';
    $key = \WxPayConfig::KEY;
    // 去空
    $data=array_filter($data);
    //签名步骤一：按字典序排序参数
    ksort($data);
    $string_a=http_build_query($data);
    $string_a=urldecode($string_a);
    //签名步骤二：在string后加入KEY
    //$config=$this->config;
    $string_sign_temp=$string_a."&key=".$key;
    //签名步骤三：MD5加密
    $sign = md5($string_sign_temp);
    // 签名步骤四：所有字符转为大写
    $result=strtoupper($sign);
    return $result;
}

/**
 * @param string $url 二维码链接
 */
function QRcode($url){
    include ICUNJI.'/vendor/wxpay/phpqrcode/phpqrcode.php';
    $url = urldecode($url);
    // 纠错级别：L、M、Q、H
    $level = 'L';
    // 点的大小：1到10,用于手机端4就可以了
    $size = 10;
    return \QRcode::png($url, false, $level, $size);
}

// xml转换成数组
function xmlToArray($xml){

    //禁止引用外部xml实体

    libxml_disable_entity_loader(true);

    $xmlstring = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);

    $val = json_decode(json_encode($xmlstring),true);

    return $val;

}


