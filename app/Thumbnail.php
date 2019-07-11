<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    public function shoes()
    {
        return $this->belongsTo('App\Shoes');
    }

}
