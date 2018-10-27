<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //request es solicitar
use App\Login;//importa el modelo 
use App\Usuario;//importa el modelo 
use App\Sede;//importa el modelo
use App\TipoUSuario;
use Illuminate\Support\Facades\Cache; //use= utilizar// Illuminate// iluminar Support//apoyo o soporte ///Facades= fachada\//Cache es donde se guarda algo para ser utilizado.

use Illuminate\Session\SessionManager;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\response
     */
    public function index()
    {
        $sedes= Sede::pluck('nombre', 'id'); 
        return view('menu.index', compact('sedes'));//todo lo que tengo ////
    }

   public function login(Request $request, SessionManager $sessionManager){


    $usuario = Usuario::where('usuario', $request->usuario)->first();
    $tipoUsuario = TipoUsuario::where('nombre','<>' ,'Docente')->where('nombre','<>','Estudiante')->get();
    
    if($usuario){
         $valido = $tipoUsuario->where('id',$usuario->tipo_usuario_id)->first();
         if($valido){

            $password = Usuario::where('password', $request->password)->first();

                if($password){
                    Cache::put('sede',$request->sede, 3600);
                    Cache::put('usuario_id',$usuario->id, 3600);
                    return redirect('menu');
                }
                else{
                    $sessionManager->flash('mensaje', 'Usuario o contraseña incorrecto');
                    return redirect('/');
                }
        }
        else{
            $sessionManager->flash('mensaje', 'Usuario no autorizado');
            return redirect('/'); 
        }
        }
        else{
            $sessionManager->flash('mensaje', 'Usuario o contraseña incorrecto');
            return redirect('/');        
        }
    }

public function appLogin(Request $request){


    $usuario = Usuario::where('usuario', $request->usuario)->where('tipo_usuario_id', $request->tipo_usuario_id)->first();
    
    if($usuario){
        
        $password = Usuario::where('password', $request->password)->first();

        if($password){
            Cache::put('sede',$request->sede, 3600);
            Cache::put('usuario_id',$usuario->id, 3600);
            return response()->json("ok", 200);
        }
        else{
           
            return response()->json("error", 203);
        }
    }
    else{
            return response()->json("error", 203);
    }
}
}
