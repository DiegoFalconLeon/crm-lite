<?php

namespace App\Http\Controllers\customers\assign_user;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomersUsers;
use App\Models\Area;
use App\Models\Customer;
use App\Models\User;

class CustomersUsersController extends Controller
{
  public function index(){
    $customers_users = CustomersUsers::all();
    return view('content.customers.assign-user.index', compact('customers_users'));
  }

  public function create(){
    $customers = Customer::all();
    $areas = Area::all();
    $users = User::all();
    $customers_users = CustomersUsers::all();
    return view('content.customers.assign-user.create', compact('customers_users','areas','users','customers'));
  }

  public function showCustomer($id){
    $customers_users = CustomersUsers::find($id);

    return view('content.customers.assign-user.show', compact('customers_users', 'means_of_contact'));
  }
  public function delete($id){
    $customers = CustomersUsers::find($id);
    $customers->delete();
    return redirect()->route('customers.assign-user.list');
  }
  public function update(Request $request){
    $id = $request->id;
    $customers = CustomersUsers::find($id);
    // $customers->area_id = $request->areas;
    $customers->means_of_contact_id = $request->means_of_contact;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->lastname = $request->lastname;
    $customers->address = $request->address;
    $customers->email = $request->email;
    $customers->phone = $request->phone;
    $customers->status = $request->status;
    $customers->save();
    return redirect()->route('customers.assign-user.list');
  }
  public function newUser(Request $request){
    $customers = new CustomersUsers();
    $customers->means_of_contact_id = $request->means_of_contact;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->document = $request->document;
    $customers->address = $request->address;
    $customers->email = $request->email;
    $customers->phone = $request->phone;
    $customers->save();
    return redirect()->route('customers.assign-user.list');
  }
}
