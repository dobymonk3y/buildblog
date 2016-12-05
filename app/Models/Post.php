<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function category()
    {
        //one to many
        // 关联模型 本表外键 外表外键
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function tags()
    {
        //many 2 many
        return $this->belongsToMany('App\Models\Tag');
//        return $this->belongsToMany('App\Models\Tag','post_tag','post_id','tag_id');
    }

}
