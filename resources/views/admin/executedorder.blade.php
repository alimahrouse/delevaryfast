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
                         
                          <th scope="col">اسم المستلم</th>
                          <th scope="col">رقم تليفونه</th>
                          <th scope="col">سعر الطلب</th>
                          <th scope="col">المحافظه </th>
                          <th scope="col">سعر التوصيل</th>
                          <th scope="col">حاله التنفيذ </th>
                          <th scope="col">الاجمالي </th>
                        
                        </tr>
                      </thead>
                      <tbody>
                      
               @foreach ($order as $item)
               <tr>
                  
              
               <td>{{$item->user->name}}</td>
               <td>{{$item->user->phone}}</td>
               <td>{{$item->receve_name}}</td>
               <td>{{$item->receve_phone}} </td>
               <td>{{$item->price}}</td>
               <td>{{$item->city->name}}</td>
               <td>{{$item->city->price}}</td>
               <td><!-- Material indeterminate -->
               تم التنفيذ بنجاح
                </td>
               <td>{{$item->price + $item->city->price}} </td>
          
         
             </tr>
               @endforeach
       
                
                    
                         
                      </tbody>
                    </table>
                    
                  
                 
              
          
        </div>
  

@endsection