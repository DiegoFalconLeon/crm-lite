<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserArea;

class UsersController extends Controller
{
    public function index(){
      $users = User::all();
      return view('content.users.index',compact('users'));
    }

}
