@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Nuevo Usuario</h1>
</div>

  {!! Form::open(['route' => ['usuario.store', null], 'method' => 'post']) !!}
        <div class="form-group">
                {!! Form::label('usuario', 'Usuario') !!}
                {!! Form::number('usuario', null , ['class' => 'form-control', 'placeholder'=>'Digite la cédula del usuario', 'required' => 'required','max'=>'9999999999']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::text('password', null , ['class' => 'form-control', 'placeholder'=>'Digite la contraseña', 'required' => 'required']) !!}
        </div> 
        <div class="form-group">
                {!! Form::label('tipo', 'Tipo de Usuario') !!}        
                {!!Form::select('tipo', $datos['tipos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo de usuario', 'required' => 'required'])!!}
        </div> 
        <div class="form-group">
            {!! Form::label('activo', 'Activo') !!}
            {!! Form::checkbox('activo', '1', true); !!}
        </div>
        
      {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}  
  {!! Form::close() !!}


@endsection
