<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{	
	//设置表
    protected $table = 'users';
    //是否自动维护时间戳
    public $timestamps =true;
    //主键
    protected $primaryKey="id";
   //  //可以被赋值的属性
    protected $fillable = ['username','password','email','status','phone','updated_at','created_at'];

    //修改器的方法
	//对完成的数据(状态 status)做自动处理
	//在   填入  性别的时候用
	public function getStatusAttribute($value){
	$status=[1=>'禁用',0=>'激活'];
	return $status[$value];
	}

	public function info(){
		return $this->hasOne('App\Models\Userinfo','user_id');
	}
	public function add(){
		return $this->hasMany('App\Models\Useraddress','user_id');
	}
}
