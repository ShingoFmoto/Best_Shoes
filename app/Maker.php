<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shoes;

class Maker extends Model
{
    public function shoesList()
    {
        return $this->hasMany('App\Shoes')->orderBy('name', 'asc');
    }
}
