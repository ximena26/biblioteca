
@extends('layouts.app')
@section('contenido')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h1">TIPO DE USUARIO</h1>
        <img src="imagenes/logo.png" style="max-width:100%;width:auto;height:auto;">  
        
        <div class="btn-toolbar mb-2 mb-md-0">
            {!!link_to_route('tipoUsuario.create', $title = '..............', $parameters = [], $attributes = ['class'=>'btn btn-primary btn-lg'])!!}
        </div>
    </div>

<table class="table table-bordered bg-success" id="tabla">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Fecha Creación</th>
           
        </tr>
        </thead>
        <tbody>
        
        @foreach($tipos as $tipo)
        <tr>
            <td>{!!$tipo->nombre!!}</td>
            <td>{!!$tipo->created_at!!}</td>
           
          
        </tr>
        @endforeach
        <table >
            
                              <a class="nav-link active" href="\menu">
                                <span data-feather=""></span>
                                <h3 class="h1">MENU</h3>
                              </a>
             </table>            
        </tbody>
        
    </table>

@endsection

   
 
     



