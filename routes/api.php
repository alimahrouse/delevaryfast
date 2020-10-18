<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|Route::middleware('auth:api')->get('/user', function (Request $request) {
   // return $request->user();
    Route::post('/cats','apicontroller@index');
});

*/
//Route::group(['middleware'=>['api','checkapi']],function(){
    //Route::post('/cats','apicontroller@index');
 //   Route::post('/onlycat','apicontroller@specificcat');
  //  Route::post('login', 'apicontroller@login');

//});
Route::post('/admin', 'apicontroller@authenticate');
Route::post('/login','apicontroller@login');

Route::group(['middleware'=>['auth:api','checkadminapi','checkapi']],function(){
   
   
    Route::post('/onlycat','apicontroller@specificcat');
});
/*
Route::middleware('auth:api')->get('/login', function (Request $request) {
   return $request->user();
   Route::post('/cats','apicontroller@index');
});
*/
//Route::post('login', 'apicontroller@authenticate');
//Route::post('/onlycat','apicontroller@specificcat');
//Route::post('/login','apicontroller@login');
Route::group(['middleware'=>['checkadminapi:admin-api','auth:admin-api','checkapi']],function(){
 // Route::get('user', 'apicontroller@getAuthenticatedUser');
  Route::post('/cats','apicontroller@index');

 
  

});
