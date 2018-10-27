
@extends('layouts.app')
@section('contenido')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h1">UBICACION</h1>
        <img src="imagenes/logo.png" style="max-width:100%;width:auto;height:auto;">  
        
        <div class="btn-toolbar mb-2 mb-md-0">
            {!!link_to_route('ubicacion.create', $title = 'NUEVA UBICACION', $parameters = [], $attributes = ['class'=>'btn btn-primary btn-lg'])!!}
        </div>
    </div>

    <table class="table table-bordered bg-success" id="tabla">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Sede</th>
            <th>Fecha Creación</th>
            
        </tr>
        </thead>
        <tbody>
        
        @foreach($ubicaciones as $ubicacion)
        <tr>
            <td>{!!$ubicacion->nombre!!}</td>
            <td>{!!$ubicacion->sede->nombre!!}</td>
            <td>{!!$ubicacion->created_at!!}</td>
            
          
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

   
 
     



