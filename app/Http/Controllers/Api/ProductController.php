<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::All();
        return response()->json(['status' => 'Correcto', 'data' => $products], 200);
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
        
        $validated = Validator::make($request->all(), [

            "nombre" => "required | max:100",
            "descripcion" => "required",
            "precio" => "required | numeric | min:0 | not_in:0"

        ]);

        //Fallo
        if($validated->fails()) {

            return response()->json(['status'=>'nok',
            'data'=>$validated->errors()], 422);

        }

        $product = Product::create($request->all());

        return response()->json(['status'=>'ok',
        'data'=>$product], 201);          

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

        if($product) {

            return response()->json(['status' => 'Correcto', 'data' => $product], 200);

        }

        return response()->json(['error' => (['code' => 404, 'message' => 'Product not found'])], 404);


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
        
        $product = Product::find($id);

        if(!$product) {

            return response()->json(['status' => 'nok',
            'data' => 'Product not found'], 404);

        }

        $validated = Validator::make($request->all(), [

            "nombre" => "required | max:100",
            "descripcion" => "required",
            "precio" => "required | numeric | min:0 | not_in:0"

        ]);

        if($validated->fails()) {

            return response()->json(['status'=>'nok',
            'data'=>$validated->errors()], 422);

        }

        $product->fill($request->all());
        $product->save();

        return response()->json(['status'=>'ok',
        'data'=>$product], 200);

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

        if(!$product) {

            return response()->json(['status' => 'nok',
            'data' => 'Product not found'], 404);

        }

        try {
            
            $product->delete();
            return response()->json(['Borrado Correctamente'], 204);

        } catch (\Throwable $th) {
            
            return response()->json(['status'=>'NOK',
            'error'=>$th->getMessage()],409);

        }


    }
}
