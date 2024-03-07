<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function fill(){
        return view('Admin.login.login');
    }
    public function login(Request $request){
        $credentials=['name'=>$request->name,'password'=>$request->password];
       
       if(Auth::attempt($credentials)){
         $request->session()->regenerate();
         return to_route('sliders.index');
       }else{
            return back()->withErrors(['login'=>'wrong crediontails'])->onlyInput('name');
       };
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login.fill')->with('success','you are deconnected now');
    }
}
