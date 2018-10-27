<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubicacion;//importa el modelo 
use App\Sede;//importa el modelo 

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicaciones= Ubicacion::with('sede')->get(); 
        return view('ubicacion.index', compact('ubicaciones'));//todo lo que tengo //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $datos = array(
            "sedes" => Sede::pluck('nombre', 'id')
        );
        return view('ubicacion.crear', compact('datos'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ubicacion::create([
            'nombre' => $request->nombre,
            'sede_id' => $request->sede,
        ]);
        return redirect('ubicacion');//guardar registro nuevo//
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
        $ubicacion = Ubicacion::find($id);
        $ubicacion->sedes = Sede::pluck('nombre', 'id');
        return view('ubicacion.editar', compact('ubicacion'));//buscar y mostrar en pantalla//
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
        $ubicacion = Ubicacion::find($id);
        $ubicacion->nombre = $request->nombre;
        $ubicacion->sede_id = $request->sede;
        $ubicacion->save();
      return  redirect('ubicacion');//actualizar//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubicacion = Ubicacion::find($id);
        $ubicacion->delete();
        return redirect('ubicacion');//eliminar//
    }
}
