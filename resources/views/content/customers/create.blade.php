@extends('layouts/contentNavbarLayout')

@section('title', 'Clientes - Nuevo Cliente')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Usuarios /</span> Nuevo Usuario
</h4>

<div class="row">
  <div class="col-md-12">

    <div class="card mb-4">
      <h5 class="card-header">Usuario</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{route('users.new')}}">
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
              <label for="email" class="form-label">Correo</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su correo"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="areas" class="form-label">Área</label>
              <select id="areas" name="areas" class="select2 form-select">
                @foreach($areas as $area)
                  <option value="{{$area->id}}" >{{$area->name}} </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="password">Contraseña</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" name="password" class="form-control" placeholder="********" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="password">Confirmar Contraseña</label>
              <div class="input-group input-group-merge">
                <input type="password" id="repassword" name="repassword" class="form-control" placeholder="********" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="role" class="form-label">Rol</label>
              <select id="role" name="role" class="select2 form-select">
                {{-- @foreach($users as $user)
                  <option value="{{$user->role}}" >{{Util::role($user->role)}} </option>
                @endforeach --}}
                <option value="A" >Administrador</option>
                <option value="U" >Usuario</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="status" class="form-label">Estado</label>
              <select id="status" name="status" class="select2 form-select">
                <option value="A" >Activo</option>
                <option value="I" >Inactivo</option>
              </select>
            </div>
          <div class="mt-2">
            <button  class="btn btn-primary me-2">Guardar</button>
            <a type="reset" class="btn btn-outline-secondary" href="/users">Cancelar</a>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>
@endsection
