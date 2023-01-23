<?php

namespace App\Http\Controllers;
use App\Models\Client;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientList = Client::All();
        return view('client.index',['clientList' => $clientList]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('client.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            
            "DNI" => "required",
            "Nombre" => "required",
            "Apellidos" => "required",
            "Telefono" => "required",
            "Email" => "required"

        ],[

            "DNI.required" => "Debes introducir un DNI",
            "Nombre.required" => "Debes escribir un nombre",
            "Apellidos.required" => "Debes introducir un apellido",
            "Telefono.required" => "Debes introducir un DNI",
            "Email.required" => "Debes introducir un email"

        ]);

        Client::create($request->all());
        return redirect()->route('clients.index')->with('exito', 'Cliente creado con exito.'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $client = Client::find($id);
        return view('client.show',['client' => $client]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit',['client' => $client]);
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
        
        $request->validate([
            
            "DNI" => "required",
            "Nombre" => "required",
            "Apellidos" => "required",
            "Telefono" => "required",
            "Email" => "required"

        ],[

            "DNI.required" => "Debes introducir un DNI",
            "Nombre.required" => "Debes introducir nombre",
            "Apellidos.required" => "Debes introducir apellidos",
            "Telefono.required" => "Debes introducir un telefono",
            "Email.required" => "Debes introducir un email"

        ]);

        $client = Client::find($id);
        $client->DNI = $request->input('DNI');
        $client->Nombre = $request->input('Nombre');
        $client->Apellidos = $request->input('Apellidos');
        $client->Telefono = $request->input('Telefono');
        $client->Email = $request->input('Email');

        $client->save();

        return redirect()->route('clients.index')->with('exito', 'cliente actualizado con exito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $client = client::find($id);
        $client->delete();

        return redirect()->route('clients.index')->with('exito', 'cliente borrado con exito.');

    }
}
