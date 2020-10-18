<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table="city";
    protected $fillable = [
        'name', 'price', 'created_at','updated_at',
    ];
    public function orders()
    {
        return $this->hasMany('App\orders','city_id');
    }
    //
}
