@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Nuevo Docente</h1>
      
</div>

  {!! Form::open(['route' => ['docente.store', null], 'method' => 'post']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', null , ['class' => 'form-control', 'placeholder'=>'Digite el nombre del docente ', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('apellido', 'Apellido') !!}
      {!! Form::text('apellido', null , ['class' => 'form-control', 'placeholder'=>'Digite el apellido del docente', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('facultad', 'Facultad') !!}        
    {!!Form::select('facultad', $datos['facultades'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una facultad', 'required' => 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('documento', 'Documento') !!}        
    {!! Form::number('documento', null , ['class' => 'form-control', 'placeholder'=>'Digite el documento del docente']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::text('password', null , ['class' => 'form-control', 'placeholder'=>'Digite la contraseña', 'required' => 'required']) !!}
        </div> 
      {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}  
  {!! Form::close() !!}


@endsection

