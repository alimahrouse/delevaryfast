<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\orders;
use App\city;
use App\User;
use App\message;
use App\admin;


class AdminController extends Controller
{
    public function new_orders()
    {
     $order=orders::where('states',0)->get();
    
        return view('admin.neworder',compact('order'));
    }
    public function receved_orders()
    {
        $order=orders::where(['states'=>1,'execute'=>0])->get();
    
       // return view('admin.neworder',compact('order'));
        return view('admin.recevedorder',compact('order'));
    }
    public function executed_orders()
    {
        $order=orders::where(['states'=>1,'execute'=>1])->get();
    
        // return view('admin.neworder',compact('order'));
         return view('admin.executedorder',compact('order'));
      //  return view('admin.executedorder');
    }
    public function update_staue( Request $request,$id)
    {
     $order=orders::find($id);
     $order->states=1;
     $order->save();
     return redirect()->route('new_orders');
    }
    public function execute_statue( Request $request,$id)
    {
     $order=orders::find($id);
     $order->execute=1;
     $order->save();
     return redirect()->route('receved_orders');
    }
    public function users()
    {
        $state=0;
        $exec=0;
        $recev=0;
        $user=User::get();
        return view('admin.show_user',compact('user','state','exec','recev'));
    }
    public function showmessage()
{
  $m= message::where('admin_id',auth()->user()->id)->select('id','user_id','readed','check_admin_send','created_at')->get();
  $users= $m->unique('user_id');
  
//to determin if message read or not
 $read=message::select('id','user_id','created_at')->get()->groupBy('user_id');
 
 foreach ($read as  $value) {
  
   $id[]= $value->max('id');
   
   # code...
 }
 foreach ($id as  $value) {
   $f[]=message::where(['id'=>$value])->select('id','user_id','readed','check_admin_send','created_at')->get();
  
   # code...
 }

 
     return view('admin.chatuser',compact('f'));
}

public function fetchMessages($id)
{
    $m= message::where('admin_id',auth()->user()->id)->select('user_id','readed','check_admin_send')->get();
     
    
    $users= $m->unique('user_id');

   // return $users;
   
   // $m= admin::get();
$user=User::find($id);

//return $admin;
  // return $m->user->name;
 
  $messages= Message::where(['admin_id'=>auth()->user()->id ,'user_id'=>$id])->select('id','user_id','admin_id','message','check_admin_send','readed','created_at')->get();
 // return $messages->last();
 $check_readed=$messages->last();
   if ($check_readed->check_admin_send==0 && $check_readed->readed==0) {
    $messages->last()->update(['readed'=>1]);
   // return $check_readed;
      
       # code...
   }
 // $s=$m->admin->name;
  // dd($s);
  return view('admin.chat',compact('messages','users','user'));
}
public function sendMessage(Request $request,$id)
{
 // return $request;
  $admin_id = auth()->user()->id;
 $message=new Message();
  //return $request;
  $message->admin_id=$admin_id;
  $message->user_id=$id;
  $message->check_admin_send=1;
  $message->message= $request->message;
  $message->save();
  
//return  $message;
  //broadcast(new MessageSent($user, $message))->toOthers();
 // $a=new MessageSent($user, $message);
//dd($a->broadcastWith());
 return $this->fetchMessages($id);
 //return ['status' => 'Message Sent!'];

}
    //
}
