<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('page.login');
    }
    public function register(){
        return view('page.register');
    }
    public function postRegister(Request $req){

       $req->merge(['password'=>Hash::make($req->password)]);

        try{
            User::create($req->all());
        }catch(\Throwable $th){
            dd($th);
        }


        return redirect() ->route('login');
    }
    public function postLogin(Request $req){


       if(Auth::attempt(['email' => $req->email,'password'=>$req->password])){
        return redirect() ->route('index');
       }
        return redirect()->back()->with('error','Sai email or mật khẩu');
     }
     public function logout(){
        Auth::logout();
        return redirect()->back();
      }
      public function detail( $slug ){
        $detail= Product::where('slug',$slug)->first();
        return view('page.detail',compact('detail'));
    }


}
