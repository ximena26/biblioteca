@extends('layouts.app')
@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Editar Estudiante</h1>
</div>

  {!! Form::open(['route' => ['estudiante.update', $estudiante], 'method' => 'put']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', $estudiante->nombre, ['class' => 'form-control', 'placeholder'=>'Digite el nombre del estudiante', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('apellido', 'Apellido') !!}
      {!! Form::text('apellido', $estudiante->apellido, ['class' => 'form-control', 'placeholder'=>'Digite el apellido del estudiante', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('carrera', 'carrera') !!}        
    {!!Form::select('carrera', $estudiante->carreras, $estudiante->carrera_id, ['class' => 'form-control', 'placeholder' => 'Seleccione una carrera', 'required' => 'required'])!!}
</div>
 <div class="form-group">
    {!! Form::label('semestre, 'semestre) !!}        
    {!!Form::select('semestre, $estudiante->semestres, $estudiante->semestre_id, ['class' => 'form-control', 'placeholder' => 'Seleccione un semestre', 'required' => 'required'])!!}
</div>
 <div class="form-group">
    {!! Form::label('jornada', 'jornada') !!}        
    {!!Form::select('jornada', $estudiante->jornadas, $estudiante->jornada_id, ['class' => 'form-control', 'placeholder' => 'Seleccione una jornada', 'required' => 'required'])!!}
</div>
  {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}      
  {!! Form::close() !!}


@endsection