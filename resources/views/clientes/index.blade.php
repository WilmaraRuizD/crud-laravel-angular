@extends('layouts.app')
@section('content')

<div class="container">

  @if(Session::has('mensaje'))

<div class="alert alert-success" role="alert">
  {{Session::get('mensaje')}}
</div>

@endif

<h1 class="text-center">Administrador Clientes</h1>

<a href="{{url('clientes/create')}}" class="btn btn-success">Agregar clientes </a>
<table class="table table-light">
  <br>

  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>tipo_Documento</th>
      <th>Nidentificación</th>
      <th>Teléfono</th>
      <th>Celulares</th>
      <th>email</th>
      <th>Salario</th>
      <th>Acciones</th>
    </tr>

  </thead>

  <tbody>
    @foreach($clientes as $clientes)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$clientes->nombre}} {{$clientes->apellido}}</td>
      <td></td>
      <td>{{$clientes->Nidentificacion}}</td>
      <td>{{$clientes->telefono}}</td>
      <td>{{$clientes->celular1}} {{$clientes->celular2}}</td>
      <td>{{$clientes->email}}</td>
      <td>{{$clientes->salario}}</td>

      <td><a  class="btn btn-warning" href="{{url('/clientes/'.$clientes->id.'/edit')}}">Edictar</a> |
        <form class="" action="{{url('/clientes/'.$clientes->id)}}" style="display:inline" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borra?');">Borrar</button>
          </form>
       </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
