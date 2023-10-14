<?php

namespace App\Http\Controllers\customers\assign_user;

use App\Exports\CustomerUsersExport;
use App\Exports\CustomerExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomersUsers;
use App\Models\Area;
use App\Models\Customer;
use App\Models\User;
use App\Models\Company;
use Maatwebsite\Excel\Facades\Excel;

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

  public function show($id){
    $customers_users = CustomersUsers::find($id);
    $customers = Customer::all();
    $areas = Area::all();
    $users = User::all();
    return view('content.customers.assign-user.show', compact('customers_users', 'areas','users','customers'));
  }
  public function delete($id){
    $customers = CustomersUsers::find($id);
    $customers->delete();
    return redirect()->route('customers.assign-user.list');
  }
  public function update(Request $request){
    $id = $request->id;
    $customers_users = CustomersUsers::find($id);
    $customers_users->customer_id = $request->customers;
    $customers_users->area_id = $request->areas;
    $customers_users->user_id = $request->users;
    $customers_users->amount = $request->amount;
    $customers_users->description = $request->description;
    $customers_users->status = $request->status;
    $customers_users->save();
    return redirect()->route('customers.assign-user.list');
  }
  public function newCustomerUser(Request $request){
    $customers_users = new CustomersUsers();
    $customers_users->customer_id = $request->customers;
    $customers_users->area_id = $request->areas;
    $customers_users->user_id = $request->users;
    $customers_users->amount = $request->amount;
    $customers_users->description = $request->description;
    $customers_users->status = $request->status;
    $customers_users->save();
    return redirect()->route('customers.assign-user.list');
  }
  public function exportPDF(){
    $customers_users = CustomersUsers::all();
    //dd($customers_users);
    $company = Company::find(1);
    // Convertimos la vista en un documento pdf.blade.php y le pasamos los datos del libro
    $pdf = \PDF::loadView('content.customers.assign-user.pdf', compact('customers_users','company'));
    // Descargamos el documento pdf con el nombre ficha_libro.php
    return $pdf->download('Estados de casos.pdf');
  }

  public function exportExcel(){
    $excel = new CustomerUsersExport;
    return Excel::download($excel, 'Estados de Casos.xlsx');
  }
}
