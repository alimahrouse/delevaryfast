<?php
namespace App\Traits;
/**
 * 
 */
trait globaltrait
{
    public function error_msg($msg)
    {
        return response()->json([
            'status'=>false,
            'error_code'=>'001',
            'msg'=>$msg
        ]);
    }
    public function data($key,$value,$msg="")
    {
        return response()->json([
            'status'=>true,
            'error_code'=>'005',
            'msg'=>$msg,
            $key=>$value
        ]);
    }
    
}
