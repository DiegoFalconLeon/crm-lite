<?php

namespace App\Http\Controllers\areas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use RealRashid\SweetAlert\Facades\Alert;

class AreaController extends Controller
{
  public function index(){
    $areas = Area::all();
    return view('content.areas.index',compact('areas'));
  }

  public function create(){
    $areas = Area::all();
    return view('content.areas.create', compact('areas'));
  }

  public function showArea($id){
    $areas = Area::find($id);
    return view('content.areas.show', compact('areas'));
  }
  public function delete($id){
    $areas = Area::find($id);
    $areas->delete();
    Alert::error('Área eliminada', 'Se eliminó el área, correctamente')->autoClose(1500);
    return redirect()->route('areas.list');
  }
  public function update(Request $request){
    $id = $request->id;
    $areas = Area::find($id);
    $areas->name = $request->name;
    $areas->description = $request->description;
    $areas->status = $request->status;
    $areas->save();
    Alert::success('Area actualizado', 'Se actualizó el área correctamente')->autoClose(1500);
    return redirect()->route('areas.list');
  }
  public function newArea(Request $request){
    $areas = new Area();
    $areas->name = $request->name;
    $areas->description = $request->description;
    $areas->status = $request->status;
    $areas->save();
    Alert::success('Area Creaada', 'Se creó el área correctamente')->autoClose(1500);
    return redirect()->route('areas.list');
  }
}
