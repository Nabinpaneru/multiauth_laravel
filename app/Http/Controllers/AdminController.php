<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
class AdminController extends Controller
{
   
    public function Index(){

        return view('admin.admin_login');
    }

    public function Dashboard(){
        
        return view('admin.index');
    }

    public function Login(Request $request){
        
        //dd($request->all());

     

        $check = $request->all();
       //$check['password']=Hash::make($check['password']);  

          //dd($check['password']);

        if(Auth::guard('admin')->attempt(['email' => $check['email'],'password'=> $check['password'] ])){

          return redirect()->route('admin.dashboard')->with('error','Admin Login');}
        else{

       return back()->with('error','Invalid Information');
    }
    
}
public function Logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
return redirect()->route('login_form')->with('error','Logout sucessfully');
}

}
