@extends('layouts/contentNavbarLayout')

@section('title', 'Areas Cridez')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Areas /</span> Lista de Areas
</h4>
<div ><a href="/areas/create" class="btn btn-primary">Nueva Área</a></div></br>

<div class="card">
  {{-- <h5 class="card-header">Light Table head</h5> --}}
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>Nombre del área</th>
          <th>Descripcion</th>
          <th>estado</th>
          <th>Ocpiones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($areas as $area)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$area->name}}</strong></td>
          <td>{{$area->description}}</td>
          <td><span class="badge bg-label-{{Util::bagde($area->status)}} me-1">{{Util::estado($area->status)}}</span></td>
          <td>
            <a  href="areas/show/{{$area->id}}"><i class="bx bx-edit-alt me-1"></i> editar</a>
            <a  href="areas/delete/{{$area->id}};"><i class="bx bx-trash me-1"></i> Borrar</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>



@endsection
