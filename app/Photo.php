<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $upload = '/images/';
  protected $fillable = [
      'file'
  ];



   public function getfileattribute($photo)
  {
    return $this->upload . $photo;
  }


}
