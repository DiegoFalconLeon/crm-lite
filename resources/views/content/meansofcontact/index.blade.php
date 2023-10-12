@extends('layouts/contentNavbarLayout')

@section('title', 'Medios de contacto Cridez')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Medios de Contacto /</span> Lista de Medios de Contacto
</h4>
<div ><a href="/meansofcontact/create" class="btn btn-primary">Nuevo Medio de Contacto</a></div></br>

<div class="card">
  {{-- <h5 class="card-header">Light Table head</h5> --}}
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>Nombre</th>
          <th>Estado</th>
          <th>Ocpiones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($meansOfContact as $moc)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$moc->name }}</strong></td>
          <td><span class="badge bg-label-{{Util::bagde($moc->status)}} me-1">{{Util::estado($moc->status)}}</span></td>
          <td>
            <a  href="meansofcontact/show/{{$moc->id}}"><i class="bx bx-edit-alt me-1"></i> editar</a>
            <a  href="meansofcontact/delete/{{$moc->id}};"><i class="bx bx-trash me-1"></i> Borrar</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>



@endsection
