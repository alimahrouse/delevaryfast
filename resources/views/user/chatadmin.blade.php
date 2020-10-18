@extends('user.user_master')
    
    <!--BOOTOM FOOTER-->
    @section('show_order')
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
    <div class="col-md-2 col-md-offset-10">
      <div class="panel panel-default">
          <div class="panel-heading">online</div>

          <div class="copanel-body" id="parentDiv">
              <ul class="chat">
                  <li class="coleft clearfix">
                       <div class="chat-body clearfix">
                           <div class="header">
                             @foreach ($m as $item)
                             <div class="containner darker">
                                <form method="GET" action="{{route('showmessage')}}">
                              <!-- <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">-->
                              <strong class="primary-font">
                              <a href="/messages/{{$item['id']}}"><p>{{ $item->name }}</p> </a>
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
       
       
    </div>
   
</div>
<script>var objDiv = document.getElementById("parentDiv");
    objDiv.scrollTop = objDiv.scrollHeight;</script>
@endsection