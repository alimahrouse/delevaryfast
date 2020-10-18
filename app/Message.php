<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $table="messages";
  protected $fillable = [
      'id', 'user_id', 'admin_id','message','check_admin_send','readed','updated_at',
  ];

public function user()
{
  return $this->belongsTo(User::class,'user_id');
}
public function admin()
{
  return $this->belongsTo(admin::class,'admin_id');
}
}