@extends('layouts.app')
@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Editar Autor</h1>
  
</div>

  {!! Form::open(['route' => ['autor.update', $autor], 'method' => 'put']) !!}

  <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', $autor->nombre, ['class' => 'form-control', 'placeholder'=>'Digite el nombre del autor']) !!}
  </div>
  <div class="form-group">
        {!! Form::label('apellidos', 'Apellidos') !!}
        {!! Form::text('apellidos', $autor->apellidos, ['class' => 'form-control', 'placeholder'=>'Digite el apellido del autor']) !!}
    </div>
  {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}      
  {!! Form::close() !!}


@endsection