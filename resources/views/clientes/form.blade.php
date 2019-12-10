{{$modo=='crear' ? 'Agregar cliente':'Modificar Cliente'}}

<div class="form-group">
  <label class="control-label" for="nombre">{{'Nombre'}}</label>
  <input class="form-control {{$errors->has('nombre')?' is-invalid':''}}" type="text" name="nombre"
  value="{{isset($clientes->nombre)?$clientes->nombre:old('nombre')}}" id="nombre" >

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

 </div>

 <div class="form-group">
  <label class="control-label" for="apellido">{{'Apellido'}}</label>
  <input class="form-control {{$errors->has('apellido')?' is-invalid':''}}" type="text" name="apellido"
   value="{{isset($clientes->apellido)?$clientes->apellido:old('apellido')}}" id="apellido" >

   {!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

 </div>

<div class="form-group">
<p> <b>tipo_Documento</b> <br>
    <select class="" name="tipo_Documento">
      <option value="">tipo_Documento</option>
      <option value="Nit">Número de Identificación Tributaria</option>
      <option value="C.c">Cédula de ciudadanía</option>
      <option value="C.e">Cedula de extranjeria</option>
      <option value="D.i">Tarjeta de identidad</option>
      <option value="R.n">Registro de Nacido</option>

    </select>
</div>


<div class="form-group">
  <label class="control-label"for="Nidentificacio">{{'Nidentificacio'}}</label>
  <input class="form-control {{$errors->has('Nidentificacion')?' is-invalid':''}} "type="text" name="Nidentificacion"
  value="{{isset($clientes->Nidentificacion)?$clientes->Nidentificacion:old('Nidentificacion')}}" id="Nidentificacion " >

  {!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

</div>

<div class=" form-grou row">

<div class="col md-4">
  <label class="control-label" for="telefono">{{'Telefono'}}</label>
  <input class="form-control {{$errors->has('telefono')?' is-invalid':''}} " type="number" name="telefono"
   value="{{isset($clientes->telefono) ?$clientes->telefono:old('telefono')}}"  id="telefono">

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

</div>

<div  class="col md-4">
  <label class="control-label" for="celular1">{{'Celular1'}}</label>
  <input class="form-control {{$errors->has('celular1')?' is-invalid':''}}  " type="number" name="celular1"
  value="{{isset($clientes->celular1)?$clientes->celular1:old('celular1') }}" id="celular1" >

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

</div>

<div class="col md-4">
  <label class="contro-label"for="celular2">{{'Celular2'}}</label>
  <input class="form-control  {{$errors->has('celular2')?' is-invalid':''}} " type="number" name="celular2"
   value="{{isset($clientes->celular2)?$clientes->celular2:old('celular2')}}" id="celular2" >

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

</div>

</div>


<div class="form-group">
  <label class="control-label" for="email">{{'Email'}}</label>
  <input class="form-control {{$errors->has('email')?' is-invalid':''}}  "type="email" name="email"
  value="{{isset($clientes->email)?$clientes->email:old('email') }}" id="email" >

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

</div>

<div class="form-group">
  <label class="control-label" for="salario">{{'salario'}}</label>
  <input class="form-control {{$errors->has('salario')?' is-invalid':''}} "type="text" name="salario"
   value="{{isset($clientes->salario) ?$clientes->salario:old('salario')}}" id="salario" >

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div> ') !!}

</div>


    </select><br>

<input class="btn btn-success" type="submit" name="" value="{{ $modo =='crear' ?  'Agregar' : 'Modificar'}}">
<a class="btn btn-primary" href="{{url('clientes')}}">Regresar</a>
