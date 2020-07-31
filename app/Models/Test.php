<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //定义模型关联的数据表(一个模型只操作一个表)
    protected $table = 'test';
    //定义主键(可选)
    protected $primaryKey = 'id';
    //定义禁止操作时间
    public $timestamps = false;
    //设置允许写入的数据字段
    protected $fillable = ['id','name','num','dtime'];
}
