@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Nuevo Ejemplar</h1>
      
</div>

  {!! Form::open(['route' => ['ejemplar.store', null], 'method' => 'post']) !!}

  <div class="form-group">
    {!! Form::label('libro', 'Libro') !!}        
    {!!Form::select('libro', $datos['libros'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un libro', 'required' => 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('ubicacion', 'Ubicacion') !!}        
    {!!Form::select('ubicacion', $datos['ubicaciones'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una ubicación', 'required' => 'required'])!!}
</div>
      {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}  
  {!! Form::close() !!}


@endsection

