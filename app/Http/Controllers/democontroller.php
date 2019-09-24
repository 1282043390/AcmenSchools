<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\demo;
use Illuminate\Support\Facades\Redis;
//use think\cache\driver\Memcache;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\StoreBlogPost;
use Validator;

class democontroller extends Controller
{
    public function demo(){
        return view('demo');
    }

    public function js(){
        return view('public.js');
    }

    public function add(Request $request){
        $post = $request->all();
        $output = $this->Douploade('photo');
        dd($output);

    }

    public function Douploade($photoname){
        if (request()->hasFile($photoname) && request()->file($photoname)->isValid()) {
            $photo = request()->file($photoname);
            $extension = $photo->extension();
            $dirName = date('Y-m-d');
            $store_result = $photo->store($dirName);
//            $store_result = $photo->storeAs('photo', 'test.jpg');
            $output = [
                'extension' => $extension,
                'store_result' => $store_result
            ];
            return $output;
        }
        exit('未获取到上传文件或上传过程出错');
    }

    /*
     * 监听sql
     */
    public function demosql(){
        $user = new user;
        $user->name='崔金虎';
        $user->save();
    }
    /*
     * 缓存
     */
    public function redis(){
        Redis::set('foo','bar');
        $a =  Redis::get('foo');
        dd($a);
    }

    /*
     * 缓存
     */
    public function memcache(){
        $redis = Redis::connection('mydefine');
        $redis->set('foo','bar');
        $a =  $redis->get('foo');
        dd($a);
    }

    /*
     * 验证器
     */
    public function form(){
        return view('form');
    }

    public function check(Request $request){
        $post = $request->except(['_token']);
        $validator = Validator::make($post, [
            'name' => 'required',
        ],[
            'name.required'=>'**no empty',
        ]);
        if ($validator->fails()) {
            return redirect('/Demo/form')
                ->withErrors($validator)
                ->withInput();
        }

        dd($post);
    }

    public function demo1()
    {
        $arr = demo::get();
        dd($arr);
    }

}
