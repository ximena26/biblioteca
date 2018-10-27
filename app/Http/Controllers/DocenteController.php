<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;//importa el modelo
use App\Facultad;//importa el modelo 
use App\Usuario;//importa el modelo 
use App\TipoUsuario;//importa el modelo 


class DocenteController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes= Docente::with('facultad', 'usuario')->get(); 
        return view('docente.index', compact('docentes'));//todo lo que tengo //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $datos = array(
            "facultades" => Facultad::pluck('nombre', 'id'),
        );
        return view('docente.crear', compact('datos'));       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_usuario = TipoUsuario::where('nombre','Docente')->first();
        $usuario = Usuario::create([
            'usuario' => $request->documento,
            'password' => $request->password,
            'tipo_usuario_id' => $tipo_usuario->id,
        ]);
        if($usuario){
            Docente::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'facultad_id' => $request->facultad,
            'usuario_id' => $usuario->id,
        ]);
        return redirect('docente');//guardar registro nuevo//
        }
       
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
        $docente = Docente::find($id);
        $docente->facultades = Facultad::pluck('nombre', 'id');
        return view('docente.editar', compact('docente'));//buscar y mostrar en pantalla//
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
        $docente = Docente::find($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->facultad_id = $request->facultad;
        $docente->save();
      return  redirect('docente');//actualizar//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return redirect('docente');//eliminar//        
    }  //
}
