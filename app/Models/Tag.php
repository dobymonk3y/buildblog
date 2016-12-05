<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    public function posts()
    {
        //many 2 many
        return $this->belongsToMany('App\Models\Post','post_tag');
    }
}
