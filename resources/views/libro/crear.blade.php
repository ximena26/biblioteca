@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Nuevo Libro</h1>
      
</div>

  {!! Form::open(['route' => ['libro.store', null], 'method' => 'post']) !!}
        <div class="row">

                <div class="form-group col-sm-12">
                        {!! Form::label('titulo', 'Titulo') !!}
                        {!! Form::text('titulo', null , ['class' => 'form-control', 'placeholder'=>'Digite el titulo', 'required' => 'required']) !!}
                </div>
                <div class="form-group col-sm-6">
                        {!! Form::label('isbn', 'Isbn') !!}
                        {!! Form::number('isbn', null , ['class' => 'form-control', 'placeholder'=>'Digite el isbn', 'required' => 'required']) !!}
                </div>
                <div class="form-group col-sm-6">
                        {!! Form::label('anio', 'Año') !!}
                        {!! Form::number('anio', null , ['class' => 'form-control', 'placeholder'=>'Digite el año', 'required' => 'required', 'max'=>'9999']) !!}
                </div>
                <div class="form-group col-sm-6">
                        {!! Form::label('numero_paginas', 'Num. Páginas') !!}
                        {!! Form::number('numero_paginas', null , ['class' => 'form-control', 'placeholder'=>'Digite el número de páginas del libro', 'required' => 'required']) !!}
                </div>
                <div class="form-group col-sm-6">
                        {!! Form::label('autor', 'Autor') !!}        
                        {!!Form::select('autor', $datos['autores'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un autor', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-sm-6">
                        {!! Form::label('editorial', 'Editorial') !!}        
                        {!!Form::select('editorial', $datos['editoriales'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una editorial', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-sm-6">
                        {!! Form::label('categoria', 'Categoría') !!}        
                        {!!Form::select('categoria', $datos['categorias'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoría', 'required' => 'required'])!!}
                </div>
        </div>
        
      {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}  
  {!! Form::close() !!}


@endsection
