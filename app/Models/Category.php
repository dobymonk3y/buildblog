<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    public function posts()
    {
        // 关联模型 本表外键 外表外键
        return $this->hasMany('App\Models\Post','id','category_id');
    }
}
