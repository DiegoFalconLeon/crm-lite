@extends('layouts/contentNavbarLayout')

@section('title', 'Clientes - Nuevo Cliente')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Cliente /</span> Añadir caso a trabajador
</h4>

<div class="row">
  <div class="col-md-12">

    <div class="card mb-4">
      <h5 class="card-header">Cliente</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{route('customers.new')}}">
          @csrf
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="customers" class="form-label">Escoger Cliente</label>
              <select id="customers" name="customers" class="select2 form-select">
                @foreach($customers as $customer)
                  <option value="{{$customer->id}}" >{{$customer->name}} {{$customer->lastname}} </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="customers" class="form-label">Escoger area</label>
              <select id="customers" name="customers" class="select2 form-select">
                @foreach($areas as $area)
                  <option value="{{$area->id}}" >{{$area->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-12">
              <label for="document" class="form-label">Detalle de consulta</label>
              <input class="form-control" type="text" name="document" id="document" placeholder="Documento"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="amount" class="form-label">Monto</label>
              <input class="form-control" type="number" id="amount" name="amount" placeholder="Ingrese el monto"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="customers" class="form-label">Escoger area</label>
              <select id="customers" name="customers" class="select2 form-select">
                @foreach($users as $user)
                  <option value="{{$user->id}}" >{{$user->name}} {{$user->lastname}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="phone" class="form-label">Observacion</label>
              <input class="form-control" type="number" id="phone" name="phone" placeholder="Ingrese su celular"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="status" class="form-label">Estado</label>
              <select id="status" name="status" class="select2 form-select">
                <option value="2" >{{Util::cstatus('2')}}</option>
                <option value="0" >{{Util::cstatus('0')}}</option>
                <option value="1" >{{Util::cstatus('1')}}</option>
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
