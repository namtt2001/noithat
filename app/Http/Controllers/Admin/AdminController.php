<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logon(){
        return view('admin.logon');
    }
    public function postLogon(Request $request){

       if(Auth::attempt(['email'=> $request->email,'password'=> $request->password, 'role'=>1])){
        return redirect()->route('admin.index') ;
       }else
       return redirect()->back()->with('err', 'Sai thông tin');
    }
    public function signOut(){
        Auth::logout();
        return redirect()-> route('logon');
    }
}
