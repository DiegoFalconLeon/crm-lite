<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
  public function list()
  {
    $customers = Customer::all();
    return $customers;
  }

  public function findById($id)
  {
    $customers = Customer::find($id);
    return $customers;
  }
  public function newCustomer(Request $request)
  {
    $customers = new Customer();
    $customers->area_id = $request->area_id;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->role = $request->role;
    $customers->email = $request->email;
    $customers->password = Hash::make($request->password);
    $customers->image = $request->image;
    $customers->status = $request->status;
    $customers->save();
    return $customers;
  }

  public function updateCustomer($id, Request $request)
  {
    $customers = Customer::find($id);
    $customers->area_id = $request->area_id;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->role = $request->role;
    $customers->email = $request->email;
    $customers->password = Hash::make($request->password);
    $customers->image = $request->image;
    $customers->status = $request->status;
    $customers->save();
    return $customers;
  }
  public function deleteCustomer($id)
  {
    $customers = Customer::find($id);
    $customers->delete();
    return  ['mensaje' => 'Cliente eliminado'];
  }
}
