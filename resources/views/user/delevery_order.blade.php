
@extends('user.user_master')
@section('take_order')
    

<div class="animated fadeInUp">
  <div ng-app='WajbetySearch' ng-controller='SearchController'>
  <form method="POST" action="{{route('save_order')}}">
  @csrf;

<div class="search-wraps location-search-1">

  <h1>هنجيبلك أى حاجة من أى حتة</h1>
 

  <div class="fields-location-wrap rounded3">
    <div class="inner row">
       <div class="col-sm-4 left-border rounded-corner typhead-city-wrap">
        <div class="location-loader"></div>
        
          <select name="city" class="col-sm-12 left-border with-location-loader" style="min-height:35px" > 
              <optgroup label="من فضلك أختر اسم  المدينه ">
                 
                
                  @foreach ($citys as  $items)
                  <option value="{{  $items->id}}"> {{  $items->name}}</option>
                  @endforeach
                 
              </optgroup>
          </select>
       </div>
	    <div class="col-sm-4 left-border with-location-loader">
         
         <div class="location-loader"></div>
        
         <input placeholder="رقم التليفون" autocomplete="off" required="required"   type="text" value="" name="phone" id="phone" /> 
      </div>
       <div class="col-sm-4 left-border with-location-loader">
         <div class="location-loader"></div>
         <input placeholder="اسم المرسل اليه" autocomplete="off" required="required"   type="text" value="" name="name" id="name" /> 
         </div>
         <div class="col-sm-4 left-border with-location-loader">
         <div class="location-loader"></div>
         <input placeholder=" سعر الطلب" autocomplete="off" required="required"   type="text" value="" name="price" id="name" />       </div>
       
         <div class="col-sm-4 right-border rounded-end">
         <button type="submit" class="location-search-submit"> طلب توصيل</button>
       </div>
    </div> <!--inner-->
  </div> <!--fields-location-wrap-->
  
</div> <!--search-wraps-->
</form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
<script src="https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.3.3.js"></script>

</div>
</div> <!--parallax-container-->

@endsection



@section('show_order')
    

<!--MOBILE APP SECTION-->
<div id="mobile-app-sections" class="">
<div class="container">
<div class="container-medium">
  <div class="row breadcrumbs-top">
    <div class="breadcrumb-wrapper col-12">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            
            <th scope="col" style="text-align:right">اسم المرسل اليه</th>
            <th scope="col"style="text-align:right">المدينه</th>
           
            <th scope="col"style="text-align:right">سعر الطلب</th>
            
            <th scope="col" style="text-align:right">تعديل</th>
          </tr>
        </thead>
        <tbody>
         
  @foreach ($order as  $item)

    <tr>
    
    
       <td class="col-md-4">{{$item['receve_name']}}</td>
      
           <td class="col-md-4">{{ $item->city->name  }}</td>
      
      
      <td class="col-md-2">{{$item['price']}}</td>
      
      
      <td class="col-md-2">
     <form method="GET" action="route('save_order')">
     @method('DELETE')
     @csrf
      <a href="/order/{{$item['id']}}">
       
        
        <span class="glyphicon glyphicon-remove"></span>
        </a>
     
      <a href="/orderedite/{{$item['id']}}">
          <span class="glyphicon glyphicon-edit"></span>
        </a>
      </form>
      </td>
    </tr>
      
            @endforeach
        </tbody>
      </table>
      
    
   
</div>
  </div> <!--container-medium-->
  
</div>
</div>
  
</div>
</div> <!--container-->
<!--END MOBILE APP SECTION-->

<!--FEATURED RESTAURANT SECIONS-->
<!--END FEATURED RESTAURANT SECIONS-->


@endsection
  


 

