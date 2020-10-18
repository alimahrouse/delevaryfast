<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\city;
use App\orders;
use App\Message;
use App\User;
use App\admin;
use App\Events\new_chat;
use App\Events\MessageSent;

class UserController extends Controller
{
    public function index()
    {
     $citys=city::get();
    // $orders= orders::get();
     $order=orders::where('user_id',auth()->user()->id)->get();

    // foreach ($order as  $value) {
      //   echo($value->city);
         # code...
   //  }
   //$c=$order->city()->first();
   //return $c;
    return view('user.delevery_order',compact('citys','order'));
    }
    public function create_order(Request $request )
    {
      
        $order=new orders();
        $order->city_id=$request->city;
        $order->receve_name=$request->name;
        $order->receve_phone=$request->phone;
        $order->price=$request->price;
        $order->user_id=auth()->user()->id;
        $order->save();
        return redirect()->route('save_order');
    
    }
    public function destroy($id)
    {
        $order=orders::find($id);
        $order->delete();
        return redirect()->route('show_order');
    }
    public function showupdate($id)
         {
             $citys=city::get();
        
         $order=orders::where('user_id',auth()->user()->id)->get();
        $order_=orders::find($id);
       // return $id;
        return view('user.delevary_update',compact('order','order_','citys','id'));
    }
    public function saveupdate(Request $request,$id)
    {
       // return $id;
        $order=orders::find($id);
        $order->city_id=$request->city;
        $order->receve_name=$request->name;
        $order->receve_phone=$request->phone;
        $order->price=$request->price;
        $order->user_id=auth()->user()->id;
        $order->save();
        return redirect()->route('show_order');
//return $order;


    }
public function sendmessagee(Request $request)
{
//return $request->message;
//$data=$request->data;
//$data='ali';
event(new new_chat($request->data));

  //  broadcast(new new_chat(auth()->user(),$data))->toOthers();
    
   // $pusher->trigger('mychat', 'App\Events\new_chat', $request->data);
 
return redirect()->route('showmessage');
}
public function showmessage()
{
  $m= admin::get();
     return view('user.chatadmin',compact('m'));
}

public function fetchMessages($id)
{
    $m= admin::get();
$admin=admin::find($id);
//return $admin;
  // return $m->user->name;
  $messages= Message::where(['user_id'=>auth()->user()->id ,'admin_id'=>$id])->select('user_id','admin_id','message','check_admin_send','created_at')->get();
 // return $messages;
 // $s=$m->admin->name;
  // dd($s);
  return view('user.chat',compact('messages','m','admin'));
}
public function sendMessage(Request $request,$id)
{
 // return $request;
  $user_id = auth()->user()->id;
 $message=new Message();
  //return $request;
  $message->user_id=$user_id;
  $message->admin_id=$id;
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
