<?php

namespace App\Http\Controllers\admin\rests;

use App\model\rests\navigationModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class navigationController extends Controller
{
    /**
     * @contents 导航栏添加视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.rests.add');
    }

    public function mlist()
    {
        $data = navigationModel::get();
        return view('admin.rests.list',['data'=>$data]);
    }
}
