<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;

class ProductController extends Controller
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
        $productList = Product::All();
        //return $userList;
        return view('product.index',['productList' => $productList]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $this->authorize('create', Product::class);
        return view('product.create');

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
            
            "nombre" => "required | max:100",
            "descripcion" => "required",
            "precio" => "required | numeric | min:0 | not_in:0"

        ],[

            "nombre.required" => "Debes introducir nombre de no mas de 100 caracteres",
            "descripcion.required" => "Debes escribir una descripcion del producto",
            "precio.required" => "Debes introducir un precio",
            "precio.not_in" => "Un numero mayor 0",
            "precio.min" => "Un numero mayor que 0"

        ]);
/*
        $product = new Product;
        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->precio = $request->input('precio');
        $product->save();
*/
        Product::create($request->all());
        return redirect()->route('products.index')->with('exito', 'Producto creado con exito.');            

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product = Product::find($id);
        $this->authorize('view', $product);
        return view('product.show',['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::find($id);
        $this->authorize('update', $product);
        return view('product.edit',['product' => $product]);

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
            "descripcion" => "required",
            "precio" => "required | numeric | min:0 | not_in:0"

        ],[

            "nombre.required" => "Debes introducir nombre de no mas de 100 caracteres",
            "descripcion.required" => "Debes escribir una descripcion del producto",
            "precio.required" => "Debes introducir un precio",
            "precio.not_in" => "Un numero mayor 0",
            "precio.min" => "Un numero mayor que 0"

        ]);

        $product = Product::find($id);
        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->precio = $request->input('precio');

        $product->save();

        return redirect()->route('products.index')->with('exito', 'Producto actualizado con exito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index')->with('exito', 'Producto eliminado con exito.');

    }
}
