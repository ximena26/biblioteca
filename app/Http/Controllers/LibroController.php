<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Autor;
use App\Categoria;
use App\Editorial;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::with('autor', 'categoria','editorial')->get();        
        return view('libro.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = array(
            "autores" => Autor::pluck('nombre','id'),
            "categorias" => Categoria::pluck('nombre', 'id'),
            "editoriales" => Editorial::pluck('nombre', 'id')
        );
        return view('libro.crear', compact('datos'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Libro::create([
            'isbn' => $request->isbn,
            'titulo' => $request->titulo,
            'anio' => $request->anio,
            'numero_paginas' => $request->numero_paginas,
            'editorial_id' => $request->editorial,
            'categoria_id' => $request->categoria,
            'autor_id' => $request->autor,
        ]);
        return redirect('libro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        $libro->autores = Autor::pluck('nombre', 'id');
        $libro->categorias = Categoria::pluck('nombre', 'id');
        $libro->editoriales = Editorial::pluck('nombre', 'id');
       
        return view('libro.editar', compact('libro'));             
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->anio = $request->anio;
        $libro->numero_paginas = $request->numero_paginas;
        $libro->editorial_id = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->autor_id = $request->autor;
        $libro->save();
      return  redirect('libro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect('libro');
    }
}
