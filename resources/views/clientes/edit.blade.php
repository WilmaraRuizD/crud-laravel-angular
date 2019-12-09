@extends('layouts.app')

@section('content')

<div class="container">


<form class="form-horizontal" action="{{url('/clientes/'. $clientes->id) }}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
{{ method_field('PATCH') }}

@include('clientes.form',['modo'=>'editar'])


</form>
</div>
@endsection
