@extends('layouts.app')
@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Editar Ubicacion</h1>
  
</div>

  {!! Form::open(['route' => ['ubicacion.update', $ubicacion], 'method' => 'put']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', $ubicacion->nombre, ['class' => 'form-control', 'placeholder'=>'Digite la Ubicacion']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('sede', 'Sede') !!}        
    {!!Form::select('sede', $ubicacion->sedes, $ubicacion->sede_id, ['class' => 'form-control', 'placeholder' => 'Seleccione una Ubicacion', 'required' => 'required'])!!}
</div>
  {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}      
  {!! Form::close() !!}


@endsection