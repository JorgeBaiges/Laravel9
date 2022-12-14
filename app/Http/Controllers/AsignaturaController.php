<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('asignaturas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datos = $request->validate([  

            'nombre' => 'required|max:7',
            'curso' => 'required|integer|regex:/[1-2]/',
            'ciclo' => 'required|size:3|regex:/DA[M,W]/'

          ],[

            'nombre.required' => 'Debes rellenar el nombre',
            'ciclo.required' => 'Debes rellenar el ciclo',
            'curso.required' => 'Debes rellenar el curso',
            'nombre.max' => 'Nombre no puede tener mas de 7 caracteres',
            'curso.integer' => 'El curso tiene que ser un numero',
            'curso.regex' => 'El curso tiene que estar comprendido entre 1 y 2',
            'ciclo.regex' => 'El ciclo tiene que ser DAW o DAM',
            'ciclo.size' => 'El ciclo tiene que tener menos de tres caracteres',
          ]);

          dd($datos);
        /*$nombre = $request->input('nombre');
        $curso = $request->input('curso');
        $ciclo  = $request->input('ciclo');
        $comentario = $request->input('comentario');
        dd($nombre,$curso,$ciclo,$comentario);

        $datos = $request->all();
        $datos = $request->only('nombre', 'curso', 'ciclo', 'comentario');
        $datos = $request->except('nombre');
        $nuevo = "";
        if($request->has('nuevo')){
            dd($nuevo);
        }else{
            dd("No hay nada aqui");
        }*/
 

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
        //
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
        //
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
}
