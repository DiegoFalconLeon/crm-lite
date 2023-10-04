<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\UserArea;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
  public function index(){
    $users = Customer::all();
    return view('content.users.index',compact('users'));
  }

  public function create(){
    $users = Customer::all();
    $areas = UserArea::all();
    return view('content.users.create', compact('users','areas'));
  }

  public function showUser($id){
    $users = Customer::find($id);
    $areas = UserArea::all();
    return view('content.users.show', compact('users', 'areas'));
  }
  public function delete($id){
    $users = Customer::find($id);
    $users->delete();
    return redirect()->route('users');
  }
  public function update(Request $request){
    $id = $request->id;
    $users = Customer::find($id);
    $users->user_area_id = $request->areas;
    $users->name = $request->name;
    $users->lastname = $request->lastname;
    $users->email = $request->email;
    if($request->password != null){
      $users->password = Hash::make($request->password);
    }
    $users->role= $request->role;
    $users->status = $request->status;
    $users->save();
    return redirect()->route('users');
  }
  public function newUser(Request $request){
    $users = new Customer();
    $users->user_area_id = $request->areas;
    $users->name = $request->name;
    $users->lastname = $request->lastname;
    $users->email = $request->email;
    $users->password = Hash::make($request->password);
    $users->status = $request->status;
    $users->role= $request->role;
    $users->save();
    return redirect()->route('users');
  }

}
