<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $this->authorize('viewAny', Product::class);
        $userList = User::All();
        //return $userList;
        return view('user.index',['userList' => $userList]);

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
        
        $user = User::find($id);
        $this->authorize('view', $user);
        return view('user.show',['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        $this->authorize('update', $user);
        return view('user.edit',['user' => $user]);

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
            
            "nombre" => "required | max:100",
            "email" => "required",
            "password" => "required | min:8"

        ],[

            "nombre.required" => "Debes introducir nombre de no mas de 100 caracteres",
            "descripcion.required" => "Debes escribir una descripcion del producto",
            "password.required" => "Debes introducir un password",
            "password.min" => "Debe ser mas de 8 caracteres"

        ]);

        $user = User::find($id);
        $user->name = $request->input('nombre');
        $user->email = $request->input('email');
        $user->password = Hash::make($request['password']);

        $user->save();

        return redirect()->route('users.index')->with('exito', 'usero actualizado con exito.');

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
