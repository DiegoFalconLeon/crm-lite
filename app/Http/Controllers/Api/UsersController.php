<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Svg\Tag\Rect;

class UsersController extends Controller
{
    public function list(){
      $users = User::all();
      return $users;
    }

  public function findById($id){
      $users = User::find($id);
      return $users;
  }
  public function createUser(Request $request){
    $user = new User();
    $user->area_id= $request->area_id;
    $user->name = $request->name;
    $user->lastname = $request->lastname;
    $user->role = $request->role;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->image = $request->image;
    $user->status = $request->status;
    $user->save();
    return $user;
  }

  public function updateUser($id, Request $request){
    $id = $request->id;
    $user = User::find($id);
    $user->area_id= $request->area_id;
    $user->name = $request->name;
    $user->lastname = $request->lastname;
    $user->role = $request->role;
    $user->email = $request->email;
    if($request->password != null){
      $user->password = Hash::make($request->password);
    }
    $user->image = $request->image;
    $user->status = $request->status;
    $user->save();
    return $user;
  }
  public function deleteUser($id){
    $user = User::find($id);
    $user->delete();
    return  ['mensaje' => 'Usuario eliminado'];
  }
}
