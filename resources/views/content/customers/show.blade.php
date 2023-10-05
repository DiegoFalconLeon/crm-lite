@extends('layouts/contentNavbarLayout')

@section('title', 'Usuarios - Nuevo Usuario')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Clientes /</span> Editar ciente
</h4>

<div class="row">
  <div class="col-md-12">

    <div class="card mb-4">
      <h5 class="card-header">Cliente</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{route('customers.edit')}}">
          @csrf
          <input type="hidden" name="id" value="{{$customers->id}}" />
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nombres</label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Nombres" autofocus value="{{$customers->name}}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="lastname" class="form-label">Apellidos</label>
              <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Apellidos"  value="{{$customers->lastname}}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="document" class="form-label">Documento</label>
              <input class="form-control" type="text" name="document" id="document" placeholder="Documento" value="{{$customers->document}}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">Correo</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su correo" value="{{$customers->email}}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="phone" class="form-label">Celular</label>
              <input class="form-control" type="number" id="phone" name="phone" placeholder="Ingrese su celular" value="{{$customers->phone}}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="areas" class="form-label">Área</label>
              <select id="areas" name="areas" class="select2 form-select">
                @foreach($areas as $area)
                  <option value="{{$area->id}}" @selected($area->id==$customers->user_area_id)>{{$area->name}} </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="means_of_contact" class="form-label">Contactado por</label>
              <select id="means_of_contact" name="means_of_contact" class="select2 form-select">
                @foreach($means_of_contact as $moc)
                  <option value="{{$moc->id}}" @selected($moc->id==$customers->means_of_contact_id)>{{$moc->name}} </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="status" class="form-label">Estado</label>
              <select id="status" name="status" class="select2 form-select">
                <option value="2" @selected($customers->status=='2')>Por definir</option>
                <option value="1" @selected($customers->status=='1')>Concluido</option>
                <option value="0" @selected($customers->status=='0')>No aceptado</option>
              </select>
            </div>
          <div class="mt-2">
            <button  class="btn btn-primary me-2">Guardar</button>
            <a type="reset" class="btn btn-outline-secondary" href="/customers">Cancelar</a>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>
@endsection
