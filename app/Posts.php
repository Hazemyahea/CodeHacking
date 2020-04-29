<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected $fillable = [
      'title', 'body', 'categiry_id','photo_id','user_id'
  ];



    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function photo()
    {
      return $this->belongsTo('App\Photo');
    }

    public function category()
    {
      return $this->belongsTo('App\Category','categiry_id');
    }
}
