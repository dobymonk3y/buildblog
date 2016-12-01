<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    /**
     * @return array
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
