@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Nuevo Estudiante</h1>
</div>

  {!! Form::open(['route' => ['estudiante.store', null], 'method' => 'post']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', null , ['class' => 'form-control', 'placeholder'=>'Digite el nombre del estudiante ', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('apellido', 'Apellido') !!}
      {!! Form::text('apellido', null , ['class' => 'form-control', 'placeholder'=>'Digite el apellido del estudiante', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('carrera', 'Carrera') !!}        
    {!!Form::select('carrera', $datos['carreras'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una carrera', 'required' => 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('semestre', 'Semestre') !!}        
    {!!Form::select('semestre', $datos['semestres'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un semestre', 'required' => 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('jornada', 'Jornada') !!}        
    {!!Form::select('jornada', $datos['jornadas'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una jornada', 'required' => 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('documento', 'Documento') !!}        
    {!! Form::number('documento', null , ['class' => 'form-control', 'placeholder'=>'Digite el documento del estudiante']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::text('password', null , ['class' => 'form-control', 'placeholder'=>'Digite la contraseña', 'required' => 'required']) !!}
        </div> 
      {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}  
  {!! Form::close() !!}


@endsection
