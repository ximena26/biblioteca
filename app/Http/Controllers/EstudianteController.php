<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Carrera;
use App\Usuario;
use App\Semestre;
use App\Jornada;
use App\tipoUsuario;


class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $estudiantes= Estudiante::with('carrera', 'usuario', 'semestre', 'jornada')->get(); 
        return view('estudiante.index', compact('estudiantes'));//todo lo que tengo //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = array(
            "carreras" => Carrera::pluck('nombre', 'id'),
            "jornadas" => Jornada::pluck('nombre', 'id'),
            "semestres" => Semestre::pluck('nombre', 'id'),// incluir cada foranea
        );
        return view('estudiante.crear', compact('datos')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_usuario = TipoUsuario::where('nombre','Estudiante')->first();
        $usuario = Usuario::create([
            'usuario' => $request->documento,
            'password' => $request->password,
            'tipo_usuario_id' => $tipo_usuario->id,// aca se crea el usuario
        ]);
        if($usuario){
            Estudiante::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'carrera_id' => $request->carrera,
            'semestre_id' => $request->semestre,
            'jornada_id' => $request->jornada,
            'usuario_id' => $usuario->id, //
        ]);
        return redirect('estudiante');//guardar registro nuevo//
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
       $estudiante = Estudiante::find($id);
        $estudiante->carreras = Carrera::pluck('nombre', 'id');
        $estudiante->jornadas = Jornada::pluck('nombre', 'id');
        $estudiante->semestres = Semestre::pluck('nombre', 'id');
        return view('estudiante.editar', compact('estudiante'));//buscar y mostrar en pantalla//
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
        $estudiante = Estudiante::find($id);
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->carrera_id = $request->carrera;
        $estudiante->semestre_id = $request->semestre;
        $estudiante->jornada_id = $request->jornada;
        $estudiante->save();
      return  redirect('estudiante');//actualizar//
    }
/////////////////////////////////PENDIENTEEEEEEEEE
    ////////////////////////////////////
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect('estudiante');//eliminar//
    }
    public function login(Request $request){
       
    }

    
}
