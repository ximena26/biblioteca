<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ejemplar;//importa el modelo 
use App\Ubicacion;//importa el modelo 
use App\Libro;//importa el modelo 
use App\Sede;

class EjemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejemplares= Ejemplar::with('ubicacion','libro')->get(); 
        return view('ejemplar.index', compact('ejemplares'));//todo lo que tengo //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = array(
            "libros" => Libro::pluck('titulo', 'id'),
            "ubicaciones" => Ubicacion::pluck('nombre', 'id')
        );
        return view('ejemplar.crear', compact('datos')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ejemplar::create([
            'ubicacion_id' => $request->ubicacion,
            'libro_id' => $request->libro
        ]);
        return redirect('ejemplar');
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
        $ejemplar = Ejemplar::find($id);
        $ejemplar->libros = Libro::pluck('titulo', 'id');
        $ejemplar->ubicaciones = Ubicacion::pluck('nombre', 'id');
       
        return view('ejemplar.editar', compact('ejemplar'));  
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
        $ejemplar = Ejemplar::find($id);
        $ejemplar->libro_id = $request->libro;
        $ejemplar->ubicacion_id = $request->ubicacion;
        $ejemplar->save();
      return  redirect('ejemplar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ejemplar = Ejemplar::find($id);
        $ejemplar->delete();
        return redirect('ejemplar');
    }

    public function filtro(Request $request){

        $sede = Sede::find($request->sede);
        $tipoFiltro = $request->tipoFiltro;
        $filtro = $request->filtro;
        $respuesta = "";

        switch ($tipoFiltro) {
    case "Titulo":
        $ejemplares = DB::table('ejemplar')
        ->join('libro', 'libro.id', '=', 'ejemplar.libro_id')
        ->join('autor', 'autor.id', '=', 'libro.autor_id')
        ->join('editorial', 'editorial.id', '=', 'libro.editorial_id')
        ->join('ubicacion', 'ubicacion.id', '=', 'ejemplar.ubicacion_id')
        ->join('sede', 'sede.id', '=', 'ubicacion.sede_id')
        ->select('libro.titulo', 'sede.nombre as sede', 'ubicacion.nombre as ubicacion',DB::raw('CONCAT(autor.nombre, " ", autor.apellidos) AS autor'), 'editorial.nombre as editorial','ejemplar.estado' )
        ->where('libro.titulo', 'like', '%'.$filtro.'%')
        ->where('sede.id', $sede->id)
        ->distinct('ejemplar.id')
        ->get();
        break;
    case "Autor":
    $ejemplares = DB::table('ejemplar')
        ->join('libro', 'libro.id', '=', 'ejemplar.libro_id')
        ->join('autor', 'autor.id', '=', 'libro.autor_id')
        ->join('editorial', 'editorial.id', '=', 'libro.editorial_id')
        ->join('ubicacion', 'ubicacion.id', '=', 'ejemplar.ubicacion_id')
        ->join('sede', 'sede.id', '=', 'ubicacion.sede_id')
        ->select('libro.titulo', 'sede.nombre as sede', 'ubicacion.nombre as ubicacion', 'ejemplar.estado' )
        ->where('autor.nombre', 'like', '%'.$filtro.'%')
        ->orWhere('autor.apellidos', 'like', '%'.$filtro.'%')
        ->where('sede.id', $sede->id)
        ->distinct('ejemplar.id')
        ->get();
        break;
    case "Editorial":
        
         $ejemplares = DB::table('ejemplar')
        ->join('libro', 'libro.id', '=', 'ejemplar.libro_id')
        ->join('autor', 'autor.id', '=', 'libro.autor_id')
        ->join('editorial', 'editorial.id', '=', 'libro.editorial_id')
        ->join('ubicacion', 'ubicacion.id', '=', 'ejemplar.ubicacion_id')
        ->join('sede', 'sede.id', '=', 'ubicacion.sede_id')
        ->select('libro.titulo', 'sede.nombre as sede', 'ubicacion.nombre as ubicacion', 'ejemplar.estado' )
        ->where('editorial.nombre', 'like', '%'.$filtro.'%')
        ->where('sede.id', $sede->id)
        ->distinct('ejemplar.id')
        ->get();
        break;
}

        Return $ejemplares;
    }
}
