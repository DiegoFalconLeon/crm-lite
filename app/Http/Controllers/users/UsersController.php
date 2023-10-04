<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserArea;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){
      $users = User::all();
      return view('content.users.index',compact('users'));
    }

    public function create(){
      $users = User::all();
      $areas = UserArea::all();
      return view('content.users.create', compact('users','areas'));
    }

    public function showUser($id){
    	$users = User::find($id);
    	$areas = UserArea::all();
    	return view('content.users.show', compact('users', 'areas'));
    }
    public function delete($id){
    	$users = User::find($id);
    	$users->delete();
    	return redirect()->route('users');
    }
    public function update(Request $request){
    	$id = $request->id;
      $users = User::find($id);
      $users->user_area_id = $request->areas;
    	$users->name = $request->name;
      $users->lastname = $request->lastname;
    	$users->email = $request->email;
      if($request->password != null){
        $users->password = $request->password;
      }
    	$users->password = Hash::make($request->password);
      $users->status = $request->status;
    	$users->save();
    	return redirect()->route('users');
    }
    public function newUser(Request $request){
      $users = new User();
      $users->user_area_id = $request->areas;
      $users->name = $request->name;
      $users->lastname = $request->lastname;
      $users->email = $request->email;
      $users->password = Hash::make($request->password);
      $users->status = $request->status;
      $users->save();
      return redirect()->route('users');
    }

}
