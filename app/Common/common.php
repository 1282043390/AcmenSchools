<?php

//-----------------------------------layui(code信息类)------------------------------------------
function demo(){
    echo 'demo';
}

//正确信息
function success($font){
    $arr =[
        'font' => $font,
        'code' => 1
    ];
    echo json_encode($arr);
}
//错误信息
function full($font){
    $arr =[
        'font' => $font,
        'code' => 2
    ];
    echo json_encode($arr);die;
}

//感叹号信息
function hint($font){
    $arr =[
        'font' => $font,
        'code' => 0
    ];
    echo json_encode($arr);
}

//疑问信息
function doubt($font){
    $arr =[
        'font' => $font,
        'code' => 3
    ];
    echo json_encode($arr);
}

//疑问信息
function lock($font){
    $arr =[
        'font' => $font,
        'code' => 4
    ];
    echo json_encode($arr);
}

//错误表情信息
function full1($font){
    $arr =[
        'font' => $font,
        'code' => 5
    ];
    echo json_encode($arr);die;
}
//正确表情信息
function success1($font){
    $arr =[
        'font' => $font,
        'code' => 6
    ];
    echo json_encode($arr);
}
function RandCode(){
    return rand(1000,9999);
}

//------------------------------------发送验证码---------------------------------------------
/*
* 框架自带发邮件方法
 * $email:邮箱 $rand：动态码
 * 无返回值 res 为空 ok时
 */
function  SendEmailDo($email,$rand){
    $res = \Mail::raw($rand ,function($message)use($email){
        //设置主题
        $message->subject("欢迎注册滕浩有限公司");
        //设置接收方
        $message->to($email);
    });
    return $res;
}

/*
 * 阿里云发送短信
 * $myAppCode：我的APPcode $phone：发送的手机 $code：验证码
 */
function  SendPhone($myAppCode,$phone,$code){
    $host = "http://dingxin.market.alicloudapi.com";
    $path = "/dx/sendSms";
    $method = "POST";
    $appcode = $myAppCode;
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "mobile=$phone&param=code%3A$code&tpl_id=TP1711063";
    $bodys = "";
    $url = $host . $path . "?" . $querys;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    curl_exec($curl);
    return true;
//    var_dump(curl_exec($curl));
}
/*
 * 获取用户id
 */
function GetId(){
    return session('user_id');
}

//-------------------------------------生成随机吗类-----------------------------------------------
/*
 * 生成订单号
 * 第四位数以后及倒数4位数前为时间错
 */
function getOrderOn(){
    $num1 = rand(1000,9999);
    $num2 = time();
    $num = $num1.$num2.$num1;
    return $num;
}

//-----------------------------------密码防火墙---------------------------------------
/*
 * 添加密码防火墙
 */
function pwd_md5()
{
    $str = '1234567890qwertyuiop[]-=asdfghjklzxcvbnm,*-`';//44位
    $len = strlen($str)-7;
    $start = rand(0,$len);//生成随机的起始值
    $sub_str = substr(str_shuffle($str),$start,6);
    // dump($sub_str);
    return $sub_str;
    // ---------------------------------------------------
    // strlen()
    // rand()
    // str_shuffle()
    // ---------------------------------------------------
}

//---------------------------------排序----------------------------------------
/*
 * 排序
 */
function cate_list($arr,$pid)
{
    static $list =array();
    foreach($arr as $k=>$value){
        if ($pid == $value['pid']) {
            $list[]=$value;
            cate_list($arr,$value['cate_id']);
        }
    }
    return $list;
}

//---------------------------------json接口返回---------------------------------------
/*
 * @content 设置json数据
 * $code int
 * $message  strint
 * $data array
 */
function setJsonEncode($code,$message,$data='')
{
    $code1 = (int)$code;
    $message1 = $message;
    if(empty($data)){
        $arr = [
            'code'=>$code1,
            'message'=>$message1,
            'data'=>[],
        ];
    }else {
        $arr = [
            'code' => $code1,
            'message' => $message1,
            'data' => $data,
        ];
    }
        return json_encode($arr);
}

