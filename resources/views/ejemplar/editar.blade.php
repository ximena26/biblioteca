@extends('layouts.app')
@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Editar Ejemplar</h1>
  
</div>

  {!! Form::open(['route' => ['ejemplar.update', $ejemplar], 'method' => 'put']) !!}

  <div class="form-group">
    {!! Form::label('libro', 'Libro') !!}        
    {!!Form::select('libro', $ejemplar->libros, $ejemplar->libro_id, ['class' => 'form-control', 'placeholder' => 'Seleccione un libro', 'required' => 'required'])!!}
</div>
<div class="form-group">
    {!! Form::label('ubicacion', 'Ubicación') !!}        
    {!!Form::select('ubicacion', $ejemplar->ubicaciones, $ejemplar->ubicacion_id, ['class' => 'form-control', 'placeholder' => 'Seleccione una ubicación', 'required' => 'required'])!!}
</div>
  {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}      
  {!! Form::close() !!}


@endsection