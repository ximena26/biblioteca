@extends('layouts.app')
@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Prestar Libro</h1>
  
</div>

  {!! Form::open(['route' => ['prestamo.store', $ejemplar], 'method' => 'post']) !!}

  <div class="row">

                {!! Form::label(null, 'Libro a prestar :') !!}
                {!! Form::label(null, $ejemplar->libro->titulo) !!}
                    
        <div class="form-group col-sm-12">
                {!! Form::hidden('id', $ejemplar->id) !!}
        </div>

         <div class="form-group col-sm-12">
                {!! Form::label('usuario', 'Usuario') !!}
                {!! Form::text('usuario', $ejemplar->usuario , ['class' => 'form-control', 'placeholder'=>'digite el documento del usuario', 'required' => 'required']) !!}
        </div>
        
  </div>
    
      {!! Form::submit('Prestar', ['class' => 'btn btn-success']) !!}  
  {!! Form::close() !!}


@endsection
