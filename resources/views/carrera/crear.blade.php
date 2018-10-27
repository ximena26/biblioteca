@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Nueva Carrera</h1>
      
</div>

  {!! Form::open(['route' => ['carrera.store', null], 'method' => 'post']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', null , ['class' => 'form-control', 'placeholder'=>'Digite el nombre de la carrera']) !!}
  </div>
      {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}  
  {!! Form::close() !!}


@endsection

