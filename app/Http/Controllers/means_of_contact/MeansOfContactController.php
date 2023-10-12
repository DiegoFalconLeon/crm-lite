<?php

namespace App\Http\Controllers\means_of_contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeansOfContact;

class MeansOfContactController extends Controller
{
  public function index(){
    $meansOfContact = MeansOfContact::all();
    return view('content.meansofcontact.index',compact('meansOfContact'));
  }

  public function create(){
    $meansOfContact = MeansOfContact::all();
    return view('content.meansofcontact.create', compact('meansOfContact'));
  }

  public function showArea($id){
    $meansOfContact = MeansOfContact::find($id);
    return view('content.meansofcontact.show', compact('meansOfContact'));
  }
  public function delete($id){
    $meansOfContact = MeansOfContact::find($id);
    $meansOfContact->delete();
    return redirect()->route('meansofcontact.list');
  }
  public function update(Request $request){
    $id = $request->id;
    $meansOfContact = MeansOfContact::find($id);
    $meansOfContact->name = $request->name;
    $meansOfContact->status = $request->status;
    $meansOfContact->save();
    return redirect()->route('meansofcontact.list');
  }
  public function newUser(Request $request){
    $meansOfContact = new MeansOfContact();
    $meansOfContact->name = $request->name;
    $meansOfContact->status = $request->status;
    $meansOfContact->save();
    return redirect()->route('meansofcontact.list');
  }
}
