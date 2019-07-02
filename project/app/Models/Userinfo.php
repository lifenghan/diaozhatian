<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
   //设置表
    protected $table = 'userinfo';
    //是否自动维护时间戳
    public $timestamps =true;
    //主键
    protected $primaryKey="id";
   
}
