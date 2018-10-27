<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Prestamo;
use App\Usuario;
use App\Ejemplar;
use App\Libro;
use App\TipoUsuario;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $libros = DB::table('libro')
        ->join('ejemplar', 'ejemplar.libro_id', '=', 'libro.id')
        ->join('ubicacion', 'ubicacion.id', '=', 'ejemplar.ubicacion_id')
        ->join('sede', 'sede.id', '=', 'ubicacion.sede_id')
        ->join('prestamo', 'prestamo.ejemplar_id', '=', 'ejemplar.id')
        ->join('usuario', 'usuario.id','=','prestamo.prestador_id')
        ->select('libro.titulo', 'prestamo.prestador_id', 'prestamo.usuario_id', 'Prestamo.fecha_devolucion_max', 'ejemplar.id as ejemplar_id', 'Prestamo.fecha_prestamo' )
        ->where('ejemplar.estado', '1')
        ->where('sede.id', Cache::get('sede'))
        ->distinct('ejemplar.id')
        ->get();
foreach($libros as $libro){
        $prestador = Usuario::find($libro->prestador_id);
        $usuario = Usuario::find($libro->usuario_id);
        $libro->prestador = $prestador->usuario;
        $libro->usuario = $usuario->usuario;
}
        return view('prestamo.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libros = DB::table('libro')
        ->join('ejemplar', 'ejemplar.libro_id', '=', 'libro.id')
        ->join('editorial', 'editorial.id', '=', 'libro.editorial_id')
        ->join('categoria', 'categoria.id', '=', 'libro.categoria_id')
        ->join('autor', 'autor.id', '=', 'libro.autor_id')
        ->join('ubicacion', 'ubicacion.id', '=', 'ejemplar.ubicacion_id')
        ->join('sede', 'sede.id', '=', 'ubicacion.sede_id')
        ->select('libro.isbn', 'libro.titulo', 'editorial.nombre as editorial', 'categoria.nombre as categoria',
                'autor.nombre as autorNombre', 'autor.apellidos as autorApellidos', 'ubicacion.nombre as ubicacion', 'sede.nombre as sede', 'ejemplar.id as ejemplar_id')
        ->where('ejemplar.estado', '0')
        ->where('sede.id', Cache::get('sede'))->get();

        
        return view('prestamo.crear', compact('libros'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha_prestamo = date("Y-m-d H:i:s");
        $fecha_devolucion_max = strtotime ( '+3 day' , strtotime ( $fecha_prestamo ) );
        $fecha_devolucion_max = date ( "Y-m-d H:i:s" , $fecha_devolucion_max );
        $usuario = Usuario::where('usuario',$request->usuario)->first();

        $prestamo = Prestamo::create([
            'prestador_id' => Cache::get('usuario_id'),
            'usuario_id' => $usuario->id,
            'ejemplar_id' => $request->id,
            'fecha_prestamo' => $fecha_prestamo,
            'fecha_devolucion_max' => $fecha_devolucion_max,
        ]);

        if($prestamo){
            $ejemplar = Ejemplar::find($request->id);
            $ejemplar->estado = 1;
            $ejemplar->save();
        }
    
         return redirect('prestamo');
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
        $fecha_devolucion = date("Y-m-d H:i:s");
        $ejemplar = Ejemplar::find($id);
        $ejemplar->estado = 0;
        $ejemplar->save();
        $prestamo = Prestamo::where('ejemplar_id', $id)->first();
        $prestamo->fecha_devolucion = $fecha_devolucion;
        $prestamo->save();
        return redirect('prestamo');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function prestaEjemplar(Request $request){

        $ejemplar = Ejemplar::with('libro')->find($request->ejemplar_id);

        $ejemplar->prestador = "";
        $ejemplar->usuario = "";
       // $libro = Libro::find($ejemplar->libro_id);
         return view('prestamo.prestamo', compact('ejemplar')); 
    }
}
