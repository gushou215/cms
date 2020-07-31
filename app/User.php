<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Article\Entities\Comment;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    //定义主键(可选)
    protected $primaryKey = 'id';
    //定义禁止操作时间
    public $timestamps = false;
    //设置允许写入的数据字段
    protected $fillable = ['name','email','password','remember_token','is_admin','email_active','email_token'];

    public function blogs(){
        return $this->hasMany(Blog::class,'user_id');
    }

    //获取所有粉丝   
    public function follower(){
        return $this->belongsToMany(User::class,'follows','user_id','follower');
    }
    //获取所有关注
    public function following(){
        return $this->belongsToMany(User::class,'follows','follower','user_id');
    }
    //用户是否为粉丝
    public function isFollow($uid){
        return $this->follower()->wherePivot('follower',$uid)->first();
    }

    //关注或者取关
    public function followToggle($ids){
        $ids = is_array($ids)?:[$ids];
        return $this->follower()->withTimestamps()->toggle($ids);
    }

    //用户表关联评论表
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
