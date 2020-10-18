@extends('admin.dash');
@section('content')



  
      
          <div class="content-header-right ">
            <form class="form" action="/dash/showproduct" method="POST"
            enctype="multipart/form-data">
            @csrf;
            
            <div class="form-group">
                <label for="projectinput1"> اسم المنتج </label>
                <input type="text" value="" id="name"
                       class="form-control"
                       placeholder="ادخل اسم المنتج  "
                       name="name">
                 <span class="text-danger"></span>
            
            
                
                <button type="submit" class="btn btn-primary">
                    <i class="la la-check-square-o"></i> بحث
                </button>
            </div>
            
            </form>
          </div>
              <div class="row breadcrumbs-right">
                  
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          
                          <th scope="col">اسم العميل</th>
                          <th scope="col">رقم التليفون</th>
                         
                          <th scope="col">البريد الالكتروني</th>
                          <th scope="col">العنوان </th>
                          <th scope="col">عدد الاوردرات </th>
                          <th scope="col">الغير مستلمه </th>
                          <th scope="col">المستلمه</th>
                          <th scope="col">المنفذه </th>
                          
                        
                        </tr>
                      </thead>
                      <tbody>
                      
               @foreach ($user as $item)
               <tr>
                  
              
               <td>{{$item->name}}</td>
               <td>{{$item->phone}}</td>
               <td>{{$item->email}}</td>
               <td>{{$item->address}} </td>
               <td>{{$item->orders->count()}}</td>
               @foreach ($item->orders as $items)
               @if ($items->states==0)
               <?php $state +=1; ?>
               
               @endif
               @if ($items->execute==1)
               <?php $exec++; ?> 
               
               @endif
               @if ($items->states==1 && $items->execute==0)
               <?php $recev +=1; ?>
               
               @endif
               
               
               @endforeach
               
               <td>{{$state}}</td>
               <td> {{$recev}}</td>
               <td>{{$exec}}</td>
               
              
              
         
             </tr>
             <?php
             $state=0;
             $exec=0;
             $recev=0;
             ?>
               @endforeach
       
                
                    
                         
                      </tbody>
                    </table>
                    
                  
                 
              
          
        </div>



     
       
    

    
  

@endsection