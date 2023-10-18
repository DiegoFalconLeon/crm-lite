@extends('layouts/blankLayout')

@section('title', 'Login Cridez')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Bienvenido al gestion de clientes de {{config('variables.templateName')}}! 👋</h4>
          <p class="mb-4">Por favor ingresa con tu usuario y contraseña para continuar</p>

          <form  class="mb-3" action="{{route('login.authenticate')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Correo</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" autofocus>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Contraseña</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Ingresar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
