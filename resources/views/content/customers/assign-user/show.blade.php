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
        <form id="formAccountSettings" method="POST" action="{{route('customers.assign-user.edit')}}">
          @csrf
          <input type="hidden" name="id" value="{{$customers_users->id}}" />
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="customers" class="form-label">Cliente</label>
              <select id="customers" name="customers" class="select2 form-select">
                @foreach($customers as $customer)
                  <option value="{{$customer->id}}" @selected($customer->id==$customers_users->customer_id)>{{$customer->name}} {{$customer->lastname}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="areas" class="form-label">Area de consulta</label>
              <select id="areas" name="areas" class="select2 form-select">
                @foreach($areas as $area)
                  <option value="{{$area->id}}" @selected($area->id==$customers_users->area_id)>{{$area->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-12">
              <label for="description" class="form-label">Detalle de consulta</label>
              <input class="form-control" type="text" name="description" id="description" value="{{$customers_users->description}}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="amount" class="form-label">Monto</label>
              <input class="form-control" type="number" id="amount" name="amount" value="{{$customers_users->amount}}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="users" class="form-label">Trabajador asignado</label>
              <select id="users" name="users" class="select2 form-select">
                @foreach($users as $user)
                  <option value="{{$user->id}}" @selected($user->id==$customers_users->user_id)>{{$user->name}} {{$user->lastname}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="observation" class="form-label">Observacion</label>
              <input class="form-control" type="number" id="observation" name="observation" placeholder="Ingrese su celular"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="status" class="form-label">Estado</label>
              <select id="status" name="status" class="select2 form-select">
                <option value="2"  @selected($customers_users->status=='2')>{{Util::cstatus('2')}}</option>
                <option value="0"  @selected($customers_users->status=='0')>{{Util::cstatus('0')}}</option>
                <option value="1"  @selected($customers_users->status=='1')>{{Util::cstatus('1')}}</option>
              </select>
            </div>
            <div class="mt-2">
              <button  class="btn btn-primary me-2">Guardar</button>
              <a type="reset" class="btn btn-outline-secondary" href="/customers/assign-user">Cancelar</a>
            </div>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>
@endsection
