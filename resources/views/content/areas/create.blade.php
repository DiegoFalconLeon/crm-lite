@extends('layouts/contentNavbarLayout')

@section('title', 'Areas - Nuevo Area')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Areas /</span> Nueva Area
</h4>

<div class="row">
  <div class="col-md-12">

    <div class="card mb-4">
      <h5 class="card-header">Áreas</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{route('areas.new')}}">
          @csrf
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nombre del Área</label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Ingrese el nombre del área" autofocus/>
            </div>
            <div class="mb-3 col-md-6" >
              <label for="status" class="form-label">Estado</label>
              <select id="status" name="status" class="select2 form-select" >
                <option  selected value="A" >Activo</option>
                <option value="I" >Inactivo</option>
              </select>
            </div>
            <div class="mb-3 col-md-12">
              <label for="description" class="form-label">Descripción</label>
              <input class="form-control" type="text" name="description" id="description" placeholder="Ingrese la descripcion"/>
            </div>
          <div class="mt-2">
            <button  class="btn btn-primary me-2">Guardar</button>
            <a type="reset" class="btn btn-outline-secondary" href="/areas">Cancelar</a>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>
@endsection
