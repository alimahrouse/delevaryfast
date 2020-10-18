<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

*/
//Auth::routes();
/*
Route::group([  'middleware' => 'auth:admin'], function()
{
    
    Route::get('/admin','MyController@index')->name('adminlogin');
    Route::post('/admin','MyController@check')->name('adminlogin');
    //All the routes that belongs to the group goes here
   // Route::get('/home', 'HomeController@index')->name('home');
    
   
});
Route::group([  'middleware' => 'auth:web'], function()
{
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin','MyController@index')->name('adminlogin');
});
*/
Route::view('/', 'welcome')->name('homepag');
Auth::routes();
//Route::auth();
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::group([  'middleware' => 'auth'], function()
{
    //create order
    Route::get('/order','UserController@index')->name('show_order');
    Route::post('/order','UserController@create_order')->name('save_order');
    //delete order
    Route::get('/order/{id}','UserController@destroy');
   // Route::view('/order', 'user.delevery_order');
   //update order
   Route::get('/orderedite/{id}','UserController@showupdate')->name('showupdate');
   Route::put('/orderedite/{id}','UserController@saveupdate')->name('saveupdate');
   Route::get('/chat', 'UserController@showmessage')->name('showmessage');
   Route::get('/messages/{id}', 'UserController@fetchMessages')->name('newmessage');
   Route::post('/messages/{id}', 'UserController@sendMessage');
  // Route::post('/chats','UserController@sendmessagee')->name('sendmessagee');
  
   
});
Route::group([  'middleware' => 'auth:admin'], function()
{
   
    Route::view('/admin', 'admin.dash');
    Route::get('/admin/neworders','AdminController@new_orders')->name('new_orders');
    Route::patch('/admin/neworder/{id}', 'AdminController@update_staue')->name('update');
    Route::patch('/admin/recevedorder/{id}', 'AdminController@execute_statue')->name('execute');
    Route::get('/admin/recevedorders','AdminController@receved_orders')->name('receved_orders');
    Route::get('/admin/executedorders','AdminController@executed_orders')->name('ececuted_orders');
    Route::get('/admin/users','AdminController@users')->name('show_users');
    Route::get('/admin/chat', 'AdminController@showmessage')->name('admin_showmessage');
   Route::get('/admin/messages/{id}', 'AdminController@fetchMessages')->name('admin_newmessage');
   Route::post('/admin/messages/{id}', 'AdminController@sendMessage');
    
});


//Route::view('/admin/a', 'welcome')->middleware('auth:admin');