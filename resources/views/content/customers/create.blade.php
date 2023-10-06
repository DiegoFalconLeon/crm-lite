@extends('layouts/contentNavbarLayout')

@section('title', 'Clientes - Nuevo Cliente')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Cliente /</span> Nuevo Cliente
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
              <label for="name" class="form-label">Nombres</label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Nombres" autofocus/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="lastname" class="form-label">Apellidos</label>
              <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Apellidos"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="document" class="form-label">Documento</label>
              <input class="form-control" type="text" name="document" id="document" placeholder="Documento"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">Correo</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su correo"/>
            </div>
            <div class="mb-3 col-md-12">
              <label for="adress" class="form-label">Dirección</label>
              <input class="form-control" type="text" id="address" name="address" placeholder="Ingrese su dirección"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="phone" class="form-label">Celular</label>
              <input class="form-control" type="number" id="phone" name="phone" placeholder="Ingrese su celular"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="means_of_contact" class="form-label">Contactado por</label>
              <select id="means_of_contact" name="means_of_contact" class="select2 form-select">
                @foreach($means_of_contact as $moc)
                  <option value="{{$moc->id}}" >{{$moc->name}} </option>
                @endforeach
              </select>
            </div>
            {{-- <div class="mb-3 col-md-6">
              <label for="status" class="form-label">Estado</label>
              <select id="status" name="status" class="select2 form-select">
                <option value="A" >Activo</option>
                <option value="I" >{{Util::estado('I')}}</option>
            </div> --}}
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
