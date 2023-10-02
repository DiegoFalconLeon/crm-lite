<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
  public function index()
  {
    return view('content.login.index');
  }

  public function authenticate(Request $request){
    $credentials = $request->only('email','password');
    if(Auth::attempt($credentials)){
        return redirect()->route('login.authenticate');
    }else{
        return redirect()->route('login');
    }
  }

  public function logout(){
    Auth::logout();
        return redirect()->route('login');
  }
}

