<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
  public function index()
  {
    $company = Company::find(1);
    return view('content.company.index', compact('company'));
  }

  public function update(Request $request)
  {
    $company = Company::find(1);
    $company->name = $request->name;
    $company->document = $request->document;
    $company->address = $request->address;
    $company->phone = $request->phone;
    $company->email = $request->email;
    $company->website = $request->website;
    $file = $request->file('image');
    if ($file) {
      $filename = $company->document . ".png";
      $company->image=$filename;
      $file->storeAs('companies', $filename);
      $img = \Image::make($file->path());
      $imgurl = storage_path('app/companies');
      $img->save("$imgurl/$filename");

    }
    $company->save();
    return redirect()->route('company.index');
  }
}
