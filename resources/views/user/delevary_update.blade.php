@extends('user.user_master')
@section('take_order')
    


<div class="animated fadeInUp">
  <div ng-app='WajbetySearch' ng-controller='SearchController'>
  <form method="POST" action="/orderedite/{{$id}}">
    @method('PUT');
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
        
         <input placeholder="رقم التليفون" autocomplete="off" required="required"   type="text" value="{{$order_->receve_phone}}" name="phone" id="phone" /> 
      </div>
       <div class="col-sm-4 left-border with-location-loader">
         <div class="location-loader"></div>
         <input placeholder="اسم المرسل اليه" autocomplete="off" required="required"   type="text" value="{{$order_->receve_name}}" name="name" id="name" /> 
         </div>
         <div class="col-sm-4 left-border with-location-loader">
         <div class="location-loader"></div>
         <input placeholder=" سعر الطلب" autocomplete="off" required="required"   type="text" value="{{$order_->price}} " name="price" id="name" />      </div>
       
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

