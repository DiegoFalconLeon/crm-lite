<?php

namespace App\Http\Controllers\means_of_contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeansOfContact;
use RealRashid\SweetAlert\Facades\Alert;

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
    Alert::error('Medio eliminado', 'Se eliminó el medio de contacto, correctamente')->autoClose(1500);
    return redirect()->route('meansofcontact.list');
  }
  public function update(Request $request){
    $id = $request->id;
    $meansOfContact = MeansOfContact::find($id);
    $meansOfContact->name = $request->name;
    $meansOfContact->status = $request->status;
    $meansOfContact->save();
    Alert::success('Medio actualizado', 'Se actualizó el medio de contacto, correctamente')->autoClose(1500);
    return redirect()->route('meansofcontact.list');
  }
  public function newUser(Request $request){
    $meansOfContact = new MeansOfContact();
    $meansOfContact->name = $request->name;
    $meansOfContact->status = $request->status;
    $meansOfContact->save();
    Alert::success('Medio actualizado', 'Se creó el medio de contantaco correctamente')->autoClose(1500);
    return redirect()->route('meansofcontact.list');
  }
}
