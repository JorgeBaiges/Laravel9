<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::All();
        return response()->json(['status' => 'Correcto', 'data' => $studies], 200);
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
     * 
     */
    public function store(Request $request)
    {
        
        $validated = Validator::make($request->all(), [

            "code" => "required",
            "name" => "required",
            "family" => "required",
            "level" => "required"

        ]);

        //Fallo
        if($validated->fails()) {

            return response()->json(['status'=>'nok',
            'data'=>$validated->errors()], 422);

        }

        $studies = Study::create($request->all());

        return response()->json(['status'=>'ok',
        'data'=>$studies], 201);  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $studies = Study::find($id);

        if($studies) {

            return response()->json(['status' => 'Correcto', 'data' => $studies], 200);

        }

        return response()->json(['error' => (['code' => 404, 'message' => 'Study not found'])], 404);

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
        
        $studies = Study::find($id);

        if(!$studies) {

            return response()->json(['status' => 'nok',
            'data' => 'Study not found'], 404);

        }

        $validated = Validator::make($request->all(), [

            "code" => "required | max:100",
            "name" => "required",
            "family" => "required",
            "level" => "required"

        ]);

        if($validated->fails()) {

            return response()->json(['status'=>'nok',
            'data'=>$validated->errors()], 422);

        }

        $studies->fill($request->all());
        $studies->save();

        return response()->json(['status'=>'ok',
        'data'=>$studies], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $studies = Study::find($id);

        if(!$studies) {

            return response()->json(['status' => 'nok',
            'data' => 'study not found'], 404);

        }

        try {
            
            $studies->delete();
            return response()->json(['Borrado Correctamente'], 204);

        } catch (\Throwable $th) {
            
            return response()->json(['status'=>'NOK',
            'error'=>$th->getMessage()],409);

        }

    }
}
