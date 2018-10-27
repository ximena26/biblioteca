@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h1">NUEVO TIPO DE USUARIO</h1>

        
      
</div>

  {!! Form::open(['route' => ['tipoUsuario.store', null], 'method' => 'post']) !!}

  <div class="form-group"><br><br>
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', null , ['class' => 'form-control', 'placeholder'=>'Digite el tipo de usuario']) !!}
  </div><br><br>
      {!! Form::submit('Crear', ['class' => 'btn btn-danger btn-lg']) !!}  
  {!! Form::close() !!}

 <table >
            
                              <a class="nav-link active" href="\menu">
                                <span data-feather=""></span><br><br>
                                <h3 class="h1">MENU</h3>
                              </a>
             </table>            
        
        
    </table>
@endsection

