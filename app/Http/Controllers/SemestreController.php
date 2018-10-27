<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semestre;
class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semestres= Semestre::All(); 
        return view('semestre.index', compact('semestres'));////
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semestre.crear'); // //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Semestre::create([
            'nombre' => $request->nombre,
        ]);
        return redirect('semestre'); //  //
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
        $semestre = Semestre::find($id);
        return view('semestre.editar', compact('semestre')); // //
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
        $semestre = Semestre::find($id);
        $semestre->nombre = $request->nombre;
        $semestre->save();
      return  redirect('semestre');  //  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $semestre = Semestre::find($id);
        $semestre->delete();
        return redirect('semestre');////
    }
}
