@extends('admin.dash');
@section('content')
    

<style>
  
  .containner {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
  }
  
  .codarker {
    border-color: #ccc;
    background-color: #ddd;
  }
  
  .containner::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .containner img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
  }
  
  .containner img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
  }
  
  .cotime-right {
    float: right;
    color: #aaa;
  }
  
  .cotime-left {
    float: left;
    color: #999;
  }
  
.chat {
list-style: none;
margin: 0;
padding: 0;
}

.chat li {
margin-bottom: 10px;
padding-bottom: 5px;
border-bottom: 1px dotted #B3A9A9;
}

.chat li .chat-body p {
margin: 0;
color: #777777;
}

.copanel-body {
overflow-y: scroll;
height: 350px;
}

::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
background-color: #F5F5F5;
}
::-webkit-scrollbar-thumb {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
background-color: #555;
}

::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5;
}


/* Chat containers */
.containner {
border: 2px solid #dedede;
background-color: #f1f1f1;
border-radius: 5px;
padding: 10px;
margin: 10px 0;
}

/* Darker chat container */
.codarker {
border-color: #ccc;
background-color: #ddd;
}

/* Clear floats */
.containner::after {
content: "";
clear: both;
display: table;
}

/* Style images */
.containner img {
float: left;
max-width: 60px;
width: 100%;
margin-right: 20px;
border-radius: 50%;
}

/* Style the right image */
.containner img.right {
float: right;
margin-left: 20px;
margin-right:0;
}

/* Style time text */
.cotime-right {
float: right;
color: #aaa;
}

/* Style time text */
.cotime-left {
float: left;
color: #999;
}</style>
<div class="containner">
   
    <div class="row">
       <!-- start online test-->
    <div class="col-md-3 col-md-offset-9">
      <div class="panel panel-default">
          <div class="panel-heading">online</div>

          <div class="copanel-body" id="parentDiv">
              <ul class="chat">
                  <li class="coleft clearfix">
                       <div class="chat-body clearfix">
                           <div class="header">
                            @foreach ($users as $item)
                            <div class="containner darker">
                               <form method="GET" action="{{route('admin_showmessage')}}">
                             <!-- <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">-->
                             <strong class="primary-font">
                             <a href="/admin/messages/{{$item->user->id}}"><p>{{ $item->user->name }}</p> </a>
                          </strong>
                               </form>
                              
                             
                            </div>
                            @endforeach
                           </div>
                       </div>
                  </li>
              </ul>
          </div>
      </div>
    </div>
    <!--end online test-->
        <div class="col-md-9 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="copanel-body" id="parent">
                    <ul class="chat">
                        <li class="coleft clearfix">
                             <div class="chat-body clearfix">
                                 <div class="header">
                                     @foreach ($messages as $item)
                                     @if (auth()->user()->id == $item->admin->id && $item->check_admin_send==1)
                                     <div class="containner darker">
                                       <!-- <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">-->
                                       <strong class="primary-font">
                                        <!--{// $item->admin->name }}-->
                                        me
                                    </strong>
                                        <p> {{ $item->message }}</p>
                                <span class="cotime-left">{{$item->created_at}}</span>
                                        
                                       
                                      </div>
                                     @else
                                     <div class="containner">
                                      <!--  <img src="/w3images/bandmember.jpg" alt="Avatar">-->
                                      <strong class="primary-font">
                                        {{ $item->user->name }}
                                    </strong>
                                      <p> {{ $item->message }}</p>
                                        <span class="cotime-right">{{$item->created_at}}</span>
                                      </div>
                                     @endif
                                     
                                     @endforeach
                                    
                                 </div>
                                
                             </div>
                         </li>
                     </ul>
                    
                </div>
                <div class="panel-footer">
                <form action="/admin/messages/{{$user->id}}" method="POST"  enctype="multipart/form-data" > 
                        
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
  <script>var objDiv = document.getElementById("parent");
    objDiv.scrollTop = objDiv.scrollHeight;</script>
    @endsection
<!--footer-->
