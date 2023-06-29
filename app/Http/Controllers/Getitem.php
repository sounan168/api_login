<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Parser\Tokens;

class Getitem extends Controller
{
    function getitem(){
        $data=DB::table("usernum")->get(['UserID','UserName']);
        return response()->json($data);
    }
    function login(Request $r){
        // return response(['message'=>$r->name.$r->pass]);
    // if(Auth::attempt(['name'=>$r->name,'password'=>$r->pass])){
        
    //     $a = DB::table('admin')->where(['name',$r->name])->first();
    //     return response(['message'=>$a]);

    // }
    $a = Admin::where('name',$r->name)->first();
    if($a){
        $token = $a->createToken('auth-token')->plainTextToken;
        return response(['data'=>$token]);
    }
    // $test = Admin::all();
   
    // $test = Admin::all();
    // dd(Auth::attempt(['name'=>'admin','password'=>'123']));
    }
    function logout(Request $r){
       $r->user()->currentAccessToken()->delete();
        return response(['message'=>'success']);
    }
}
