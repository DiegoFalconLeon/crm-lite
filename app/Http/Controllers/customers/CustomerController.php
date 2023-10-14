<?php

namespace App\Http\Controllers\customers;

use App\Exports\CustomerExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;
use App\Models\MeansOfContact;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
  public function index(){
    $customers = Customer::all();
    return view('content.customers.index',compact('customers'));
  }

  public function create(){
    $customers = Customer::all();
    $means_of_contact = MeansOfContact::all();
    return view('content.customers.create', compact('customers','means_of_contact'));
  }

  public function showCustomer($id){
    $customers = Customer::find($id);
    $means_of_contact = MeansOfContact::all();
    return view('content.customers.show', compact('customers', 'means_of_contact'));
  }
  public function delete($id){
    $customers = Customer::find($id);
    $customers->delete();
    return redirect()->route('customers.list');
  }
  public function update(Request $request){
    $id = $request->id;
    $customers = Customer::find($id);
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
    return redirect()->route('customers.list');
  }
  public function newUser(Request $request){
    $customers = new Customer();
    $customers->means_of_contact_id = $request->means_of_contact;
    $customers->name = $request->name;
    $customers->lastname = $request->lastname;
    $customers->document = $request->document;
    $customers->address = $request->address;
    $customers->email = $request->email;
    $customers->phone = $request->phone;
    $customers->save();
    return redirect()->route('customers.list');
  }

  public function exportPDF(){
    $customers = Customer::all();
    $company = Company::find(1);
    // Convertimos la vista en un documento pdf.blade.php y le pasamos los datos del libro
    $pdf = \PDF::loadView('content.customers.pdf ', compact('customers','company'));
    // Descargamos el documento pdf con el nombre ficha_libro.php
    return $pdf->download('Clientes.pdf');
  }

  public function exportExcel(){
    $excel = new CustomerExport;
    return Excel::download($excel, 'Clientes.xlsx');
  }

}
