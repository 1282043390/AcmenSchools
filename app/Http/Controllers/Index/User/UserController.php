<?php

namespace App\Http\Controllers\Index\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    //返回前台注册页面
    public function register()
    {
        return view('index/user/register');
    }

    //执行注册
    public function register_do(Request $request)
    {
        //接收值
        $data=$request->all();
        if(empty($data['email']) || empty($data['name']) || empty($data['pwd']) || empty($data['pwd2'])){
            return ['message'=>'请填写完整信息','code'=>100];
        }

        //根据邮箱和用户名验证唯一性
        $info=Db::table('index_user')->where('email',$data['email'])->first();
        $info1=Db::table('index_user')->where('name',$data['name'])->first();
        if($info){
            return ['message'=>'该邮箱已经被注册','code'=>100];
        }
        if($info1){
            return ['message'=>'该用户名已经被注册','code'=>100];
        }

        //数据验证
        $data['pwd']=md5($data['pwd']);
        $data['pwd2']=md5($data['pwd2']);
        $data['register_time']=time();
        if($data['pwd']!==$data['pwd2']){
            return ['message'=>'密码不一致','code'=>100];
        }
        unset($data['pwd2']);
        //添加入库
        $res=Db::table('index_user')->insert($data);
        if($res){
            return ['message'=>'注册成功','code'=>200];
        }else{
            return ['message'=>'注册失败,请稍后重试','code'=>100];
        }
    }


    //登陆页面
    public function login()
    {
        return view('index/user/login');
    }
}
