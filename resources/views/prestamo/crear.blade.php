@extends('layouts.app')
@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Nuevo Prestamo</h1>
      
</div>

<table class="table table-bordered table-hover" id="tabla">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Isbn</th>
                    <th>Titulo</th>
                    <th>Año</th>
                    <th>Num. Paginas</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Categoría</th>
                    <th>Editar</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($libros as $libro)
                <tr>
                    <td>{!!$libro->ejemplar_id!!}</td>
                    <td>{!!$libro->isbn!!}</td>
                    <td>{!!$libro->titulo!!}</td>
                    <td>{!!$libro->editorial!!}</td>
                    <td>{!!$libro->categoria!!}</td>
                    <td>{!!$libro->autorNombre." ".$libro->autorApellidos!!}</td>
                    <td>{!!$libro->ubicacion!!}</td>
                    <td>{!!$libro->sede!!}</td>
                    <td>{!! Form::open(['route' => ['prestamo.ejemplar', 'ejemplar_id'=>$libro->ejemplar_id], 'method' => 'post']) !!}
                        {!! Form::submit('Prestar', ['class' => 'btn btn-sm btn-outline-warning']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>


@endsection
