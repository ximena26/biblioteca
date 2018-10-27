
@extends('layouts.app')
@section('contenido')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h1">LIBRO</h1>
        <img src="imagenes/logo.png" style="max-width:100%;width:auto;height:auto;">   
   
        
        <div class="btn-toolbar mb-2 mb-md-0">
            {!!link_to_route('libro.create', $title = 'NUEVO LIBRO', $parameters = [], $attributes = ['class'=>'btn btn-primary btn-lg'])!!}
        </div>
    </div>

    <table class="table table-bordered bg-success" id="tabla">
        <thead>
        <tr>
            <th>Isbn</th>
            <th>Titulo</th>
            <th>Año</th>
            <th>Num. Paginas</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Categoría</th>
            <th>Fecha Creación</th>
            
        </tr>
        </thead>
        <tbody>
        
        @foreach($libros as $libro)
        <tr>
            <td>{!!$libro->isbn!!}</td>
            <td>{!!$libro->titulo!!}</td>
            <td>{!!$libro->anio!!}</td>
            <td>{!!$libro->numero_paginas!!}</td>
            <td>{!!$libro->autor->nombre!!}</td>
            <td>{!!$libro->categoria->nombre!!}</td>
            <td>{!!$libro->editorial->nombre!!}</td>
            <td>{!!$libro->created_at!!}</td>
           
          
        </tr>
        @endforeach
        <table>
        <TR>
   <td>
                              <a class="nav-link active" href="\menu">
                                <span data-feather=""></span>
                                <h3 class="h1">MENU</h3>
                              </a>
                                </td>
               </TR> 

                </table>           
        </tbody>
        
   
       

@endsection


   
 
     



