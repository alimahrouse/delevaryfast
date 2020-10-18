<?php

namespace App\Http\Controllers;
use App\city;
use App\admin;
use App\user;
use App\Traits\globaltrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;


class apicontroller extends Controller
{
    use globaltrait;
    public function index()
    {
           $city=city::get();
           return response()->json($city);
    }
    public function specificcat(Request $request)
    {
        $city=city::find($request->id);
        if ( !$request->id || !$city) {
           if (!$request->id) {
            return $this->error_msg('يرجي ادخال مفتاح المدينه');
               # code...
           } else {
            return $this->error_msg('مفتاح المدينه غير صحيح');
               # code...
           }
           
            
           
        } else
        {
            return $this->data('city',$city,"تم التنفيذ");
            # code...
        }
        
        
    }
    public function login(Request $request)
    {
        $credentials = $request -> only(['email','password']) ;
     
           $token =  Auth::guard('api')->attempt($credentials);
          // return $token;
           if(!$token)
           {
           return $this->error_msg('E001 بيانات الدخول غير صحيحة');
           }
           $admin = Auth::guard('api')->user();
          // $user = JWTAuth::parseToken()->authenticate();
           $admin -> token = $token;
          //return token
           return $this -> data('admin' , $admin);
    }
    public function authenticate(Request $request)
        {
            $credentials = $request->only('email', 'password');
            $token =  Auth::guard('admin-api')->attempt($credentials);
           
            if(!$token)
            {
            return $this->error_msg('E001 بيانات الدخول غير صحيحة');
            }
            $admin = Auth::guard('admin-api') -> user();
           // return response()->json($admin);
           // return response()->json($admin);
            $admin -> token = $token;
            return $this -> data('admin' , $admin);

        }
      
}
