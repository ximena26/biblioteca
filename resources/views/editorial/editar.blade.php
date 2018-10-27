@extends('layouts.app')
@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Editar Editorial</h1>
  
</div>

  {!! Form::open(['route' => ['editorial.update', $editorial], 'method' => 'put']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', $editorial->nombre, ['class' => 'form-control', 'placeholder'=>'Digite el nombre de la editorial']) !!}
  </div>
  {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}      
  {!! Form::close() !!}


@endsection


