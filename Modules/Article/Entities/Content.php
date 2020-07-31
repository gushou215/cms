<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['title','author','content','thumb','click','iscommend','category_id'];

    //关联模型
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //文章关联评论
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
