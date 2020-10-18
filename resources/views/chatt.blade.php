@extends('layouts.auth')
@section('meta')
<meta http-equiv="refresh" content="1000" />
@endsection

@section('script1')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>;
@endsection
@section('script2')
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
     Pusher.logToConsole = true;
    var pusher = new Pusher('e68d2814eec767d1f2c5', {
  cluster: 'mt1'
});
var channel = pusher.subscribe('chat');
channel.bind('App\\Event\\MessageSent', function(data) {
   // console.log(response.data);

  alert(JSON.stringify(data));
});


</script>

@endsection
@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Chats</div>
              <div class="panel-body">
               @foreach ($mesage as $item)
    

              
              <p> {{$item->message}}</p>
            
              @endforeach
           
            </div>
              <div class="panel-footer">
                  <chat-form
                      v-on:messagesent="addMessage"
                      :user="{/{// Auth::user() }}"
                  ></chat-form>
              </div>
          </div>
      </div>
  </div>
</div>


  <div class="container darker">
    <p>
      Try publishing an event to channel <code>chat</code>
      with event name <code>MessageSent</code>.
    </p>
</div>
    <form action="/messages" method="POST">
      @csrf
    <input type="text" name="message">
    <input type="submit">
    </form>
 
  
 
@endsection
@section('show_order')
 <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
<div class="container">
   
    
        
  
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="panel-body" id="parentDiv">
                    <ul class="chat">
                        <li class="left clearfix">
                             <div class="chat-body clearfix">
                                 <div class="header">
                                     @foreach ($messages as $item)
                                     @if (auth()->user()->id == $item->user->id)
                                     <div class="container darker">
                                       <!-- <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">-->
                                       <strong class="primary-font">
                                        {{ $item->user->name }}
                                    </strong>
                                        <p> {{ $item->message }}</p>
                                <span class="time-left">{{$item->created_at}}</span>
                                        
                                       
                                      </div>
                                     @else
                                     <div class="container">
                                      <!--  <img src="/w3images/bandmember.jpg" alt="Avatar">-->
                                      <strong class="primary-font">
                                        {{ $item->user->name }}
                                    </strong>
                                      <p> {{ $item->message }}</p>
                                        <span class="time-right">{{$item->created_at}}</span>
                                      </div>
                                     @endif
                                     
                                     @endforeach
                                    
                                 </div>
                                
                             </div>
                         </li>
                     </ul>
                </div>
                <div class="panel-footer">
                    <form action="/messages" method="POST" > 
                        
                        @csrf
                        <div class="input-group">
                        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..."   autofocus>
                
                        <span class="input-group-btn">
                            
                            <button class="btn btn-primary btn-sm" id="btn-chat" >
                                Send
                            </button>
                            
                        </span>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>var objDiv = document.getElementById("parentDiv");
    objDiv.scrollTop = objDiv.scrollHeight;</script>
@endsection