<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller
{
    //
    // public function getLogin(){
    //   return view('backend.login.login');
    // }
    public function postLogin(Request $request){
      $this -> validate($request, [
        'email' => 'required|email',
        'password' => 'required|alphaNum|min:3'

      ]);
      $arr= ['email' =>$request->email, 'password'=>$request->password];
      if($request->remember = "rembemer me"){
          $remember= true;
      }
      else $remember = false;
      if(Auth::attempt($arr)){
        return redirect('admin/home') ;
      }
      else {
         return back()  ->with('error','tai khoan hoac mat khau chua dung');
      }
    }
      public function getRegister(){
        return view('backend.register');
      }
}
