<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Area;
use App\Models\MeansOfContact;
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
    $means_of_contact = MeansOfContact::all();
    return view('content.customers.create', compact('customers','areas','means_of_contact'));
  }

  public function showCustomer($id){
    $customers = Customer::find($id);
    $areas = Area::all();
    $means_of_contact = MeansOfContact::all();
    return view('content.customers.show', compact('customers', 'areas', 'means_of_contact'));
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
    $customers->means_of_contact_id = $request->means_of_contact;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->document = $request->document;
    $customers->email = $request->email;
    $customers->phone = $request->phone;
    $customers->status = $request->status;
    $customers->save();
    return redirect()->route('customers.list');
  }
  public function newUser(Request $request){
    $customers = new Customer();
    $customers->area_id = $request->areas;
    $customers->means_of_contact_id = $request->means_of_contact;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->document = $request->document;
    $customers->email = $request->email;
    $customers->phone = $request->phone;
    $customers->status = $request->status;
    $customers->save();
    return redirect()->route('customers.list');
  }

}
