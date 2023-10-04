<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Area;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
  public function index(){
    $customers = Customer::all();
    return view('content.customers.index',compact('customers'));
  }

  public function create(){
    $customers = Customer::all();
    $areas = Area::all();
    return view('content.customers.create', compact('customers','areas'));
  }

  public function showCustomer($id){
    $customers = Customer::find($id);
    $areas = Area::all();
    return view('content.customers.show', compact('customers', 'areas'));
  }
  public function delete($id){
    $customers = Customer::find($id);
    $customers->delete();
    return redirect()->route('customers.list');
  }
  public function update(Request $request){
    $id = $request->id;
    $customers = Customer::find($id);
    $customers->area_id = $request->areas;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->email = $request->email;
    if($request->password != null){
      $customers->password = Hash::make($request->password);
    }
    $customers->role= $request->role;
    $customers->status = $request->status;
    $customers->save();
    return redirect()->route('customers.list');
  }
  public function newUser(Request $request){
    $customers = new Customer();
    $customers->area_id = $request->areas;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->email = $request->email;
    $customers->password = Hash::make($request->password);
    $customers->status = $request->status;
    $customers->role= $request->role;
    $customers->save();
    return redirect()->route('customers.list');
  }

}
