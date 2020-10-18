<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table="orders";
    protected $fillable = [
        'city_id', 'receve_name', 'receve_phone','price','user_id','states','execute','created_at','updated_at',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function city()
    {
        return $this->belongsTo('App\city','city_id');
    }
    //
}
