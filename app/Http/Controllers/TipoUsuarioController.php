<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoUsuario;//importa el modelo 

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos= TipoUsuario::All(); 
        return view('tipoUsuario.index', compact('tipos'));//todo lo que tengo 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoUsuario.crear');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TipoUsuario::create([
            'nombre' => $request->nombre,
        ]);
        return redirect('tipoUsuario');//guardar registro nuevo
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
        $tipo= TipoUsuario::find($id);
        return view('tipoUsuario.editar', compact('tipo'));//buscar y mostrar en pantalla//
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
        $tipo = TipoUsuario::find($id);
        $tipo->nombre = $request->nombre;
        $tipo->save();
      return  redirect('tipoUsuario');//actualizar //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = TipoUsuario::find($id);
        $tipo->delete();
        return redirect('tipoUsuario');//eliminar//
    }
}
