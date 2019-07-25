<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Thumbnail;
use App\Post;

class Shoes extends Model
{
    public function maker()
    {
        return $this->belongsTo('App\Maker');
    }

    public function getOneOfThumbnails()
    {
        $t = $this->hasOne('App\Thumbnail')->get()->first();
        if ($t) {
          return $t->image_id;
        } else {
          return null;
        }
    }

    public function postList()
    {
        return $this->hasMany('App\Post')->orderBy('created_at', 'desc');
    }
}
