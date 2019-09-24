<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class demo extends Model
{
    protected  $table = 'index_user';
    protected  $primaryKey = 'id';
    //白名单
//    protected  $fillable = [
//        'name'
//    ];
//    //黑名单
//    protected  $guarded = [
//        'updated_at',
//        'created_at',
//    ];
//    //自动时间
//    public $timestamps = false;
//
//    protected $dateFormat = 'U';
//
////下面为获取器 修改器
//
////    public function getIsShowAttribute($value){
////        //这里可以对 $value 做一些转换等操作
////        return $value;
////    }
//
//    public function setFirstNameAttribute($value)
//    {
//        $this->attributes['first_name'] = strtolower($value);
//    }
//    public function getIsShowAttribute($value)
//    {
//        $a = [1=>'√',0=>'×'];
//        return $a[$value];
//    }
//
//    public function getNewsSfAttribute($value)
//    {
//        $a = [1=>'置顶',0=>'普通'];
//        return $a[$value];
//    }
}
