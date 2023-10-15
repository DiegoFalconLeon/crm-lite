@extends('layouts/contentNavbarLayout')

@section('title', 'Configuracion - Empresa')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Configuracion /</span> Empresa
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Detalle de la Empresa</h5>
      <!-- Account -->
      <form id="formAccountSettings" method="POST" action="{{route('company.update')}}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          <img src="{{asset('companies/'.$company->image)}}" alt="company-avatar" class="d-block rounded" height="100"  id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Cargar nueva foto</span>
              <i class="bx bx-upload d-block d-sm-none"></i>
              <input type="file" id="upload" name="image" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reestablecer</span>
            </button>
            <p class="text-muted mb-0">imagen JPG, GIF o PNG. Tamaño máximo de 800K</p>
          </div>
        </div>
      </div>
      <hr class="my-0">
      <div class="card-body">

          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nombre</label>
              <input class="form-control" type="text" id="name" name="name" value="{{$company->name}}"  />
            </div>
            <div class="mb-3 col-md-6">
              <label for="document" class="form-label">RUC</label>
              <input class="form-control" type="text" name="document" id="document" value="{{$company->document}}" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="address" name="address" value="{{$company->address}}" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" value="{{$company->email}}" placeholder="john.doe@example.com" />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phone">Celular</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">(+51)</span>
                <input type="text" id="phone" name="phone" class="form-control" value="{{$company->phone}}" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="website" class="form-label">Página Web</label>
              <input class="form-control" type="text" id="website" name="website" value="{{$company->website}}" />
            </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Guardar Cambios</button>
            <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>
@endsection
