<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
      return $this->belongsTo('App\Role','role_id');
    }
    public function photos()
    {
      return $this->belongsTo('App\Photo','photo_id');
    }

    public function isAdmin()
    {
      if ($this->roles->name == 'Admin' && $this->is_active == 1) {
        return true;
      }

      return false;
    }

    public function posts()
    {
      return $this->hasMany('App\Posts');
    }
}
