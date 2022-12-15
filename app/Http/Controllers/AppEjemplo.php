<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppEjemplo extends Controller
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

    public function mostrarinformacion(){

        $nombremodulo = "dwes";
        $ciclo = "DAW";

        $departamentos["nombredpto"] = "Informatica";
        $departamentos["ubicacion"] = "EdificioB";

        //return view('muestrasignatura, $datos');
        /*return view('muestrasignatura', array("nombremodulo" => $nombremodulo,
                                              "ciclo" => $ciclo));*/

        /*return view('muestrasignatura', ["nombremodulo" => $nombremodulo,
                                              "ciclo" => $ciclo]);*/

        /*return view('muestrasignatura')->with(array("nombremodulo" => $nombremodulo,
                                              "ciclo" => $ciclo));*/
        
        //return view('asignatura.muestrasignatura', compact('nombremodulo', 'ciclo', 'departamentos'));
        return view('asignatura.page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
