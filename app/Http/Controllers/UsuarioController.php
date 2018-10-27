<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;//importa el modelo
use App\TipoUsuario;//importa el modelo 
 

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        	
        \Cache::put('sede','1', 3600);
        \Cache::put('usuario_id','4', 3600);
        $usuarios= Usuario::with('tipoUsuario')->get(); 
        return view('usuario.index', compact('usuarios'));//todo lo que tengo ////
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = array(
            "tipos" => TipoUsuario::pluck('nombre', 'id')
           
        );
        return view('usuario.crear', compact('datos'));  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->password){
            Usuario::create([
                'usuario' => $request->usuario,
                'password' => $request->password,
                'tipo_usuario_id' => $request->tipo,
                'activo' => $request->activo
            ]);
        }
        else{
            Usuario::create([
                'usuario' => $request->usuario,
                'tipo_usuario_id' => $request->tipo,
                'activo' => $request->activo
            ]);
        }
        return redirect('usuario');//
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
        $usuario = Usuario::find($id);
        $usuario->tipos = TipoUsuario::pluck('nombre', 'id');
       
        return view('usuario.editar', compact('usuario'));  //
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
        $usuario = Usuario::find($id);
        $usuario->usuario = $request->usuario;
        $usuario->tipo_usuario_id = $request->tipo;
        $usuario->activo = $request->activo;
        if($request->password){
            $usuario->password = $request->password;
        }
        $usuario->save();
      return  redirect('usuario'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('usuario');//
    }
        
    public function login(Request $request){
       
    }
}
