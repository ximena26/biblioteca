

@extends('layouts.app')
@section('contenido')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h1">PRESTAMO</h1>
          <img src="imagenes/logo.png" style="max-width:100%;width:auto;height:auto;">  
        
        <div class="btn-toolbar mb-2 mb-md-0">
            {!!link_to_route('prestamo.create', $title = 'NUEVO PRESTAMO', $parameters = [], $attributes = ['class'=>'btn btn-primary btn-lg'])!!}
        </div>
    </div>

   
   <table class="table table-bordered bg-success" id="tabla">
        <thead>
        <tr>
            <th>Ejemplar</th>
            <th>Prestador</th>
            <th>Usuario</th>
            <th>Fecha Préstamo</th>
            <th>Fecha Devolución Max</th>
            <th>Devolver</th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($libros as $libro)
        <tr>
            <td>{!!$libro->titulo!!}</td>
            <td>{!!$libro->prestador!!}</td>
            <td>{!!$libro->usuario!!}</td>
            <td>{!!$libro->fecha_prestamo!!}</td>
            <td>{!!$libro->fecha_devolucion_max!!}</td>
            <td>{!!link_to_route('prestamo.edit', $title = 'Devolver', $parameters = ['id'=>$libro->ejemplar_id], $attributes = ['class'=>'btn btn-sm btn-outline-warning'])!!}</td>
            
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

   
 
     



