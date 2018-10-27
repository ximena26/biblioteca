@extends('layouts.app')
@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Editar Docente</h1>
  
</div>

  {!! Form::open(['route' => ['docente.update', $docente], 'method' => 'put']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', $docente->nombre, ['class' => 'form-control', 'placeholder'=>'Digite el nombre del docente', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('apellido', 'Apellido') !!}
      {!! Form::text('apellido', $docente->apellido, ['class' => 'form-control', 'placeholder'=>'Digite el apellido del docente', 'pattern'=>'[A-Za-z]{1,50}', 'required' => 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('facultad', 'facultad') !!}        
    {!!Form::select('facultad', $docente->facultades, $docente->facultad_id, ['class' => 'form-control', 'placeholder' => 'Seleccione una facultad', 'required' => 'required'])!!}
</div>
  {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}      
  {!! Form::close() !!}


@endsection