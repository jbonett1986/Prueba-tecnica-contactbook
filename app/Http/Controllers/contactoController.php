<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto = contacto::all();
        return $contacto;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contacto = Contacto::create([
            "nombres" => $request->nombres,
            "apellidos" => $request->apellidos,
            "telefono" => $request->telefono,
            "direccion" => $request->direccion
            ]);
        // [
        //     'data' => $contacto

        // ],
        
        // HttpResponse::HTTP_OK
    

    $contacto ->save();
    return response(
        [
            'error' => $th->getMessage()
        ],
        HttpResponse::HTTP_BAD_REQUEST
    );

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
        $contacto =contacto::findOrFail($request->id);
        $contacto-> nombres = $request->nombres;
        $contacto-> apellidos = $request->apellidos;
       $contacto->telefono=$request->telefono;
         $contacto->direccion =$request->direccion;

       
       $contacto->save();

       return $contacto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        contacto::destroy($request->id);
        return $contacto;
    }
}
