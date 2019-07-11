<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\User;
use App\Shoes;

class Post extends Model
{
    protected $fillable =['title','body','shoes_id','user_id'];

    public function commentList()
    {
      return $this->hasMany('App\Comment')->orderBy('created_at', 'desc');
    }

    public function user()
    {
      return $this->belongsTo('App\User');

    }

    public function shoes()
    {
      return $this->belongsTo('App\Shoes');

    }
}
