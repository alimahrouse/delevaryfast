<?php

namespace App;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use model;

class admin extends Authenticatable implements JWTSubject
//implements JWTSubject
{
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $guard = 'admin';
    protected $table='admins';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 
     */
   

    /**
     * The attributes that should be cast to native types.
     *
     * 
     */
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function messages()
    {
      return $this->hasMany('App\Message','admin_id');
    }
   
}
