<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductor = Conductor::all();
        return $conductor;
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
     


        $conductor                     = new Conductor();
        $conductor->ci                 = $request->get('ci');
        $conductor->nombre             = $request->get('nombre');
        $conductor->fecha_nacimiento   = $request->get('fecha_nacimiento');
        $conductor->sexo               = $request->get('sexo');
        $conductor->telefono           = $request->get('telefono');
        $conductor->email              = $request->get('email');
        $conductor->categoria_licencia = $request->get('categoria_licencia');
        $conductor->save();
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
    public function update(Request $request,$id)
    {
        $conductor = Conductor::findOrFail($id);
        $conductor->ci                 = $request->get('ci');
        $conductor->nombre             = $request->get('nombre');
        $conductor->fecha_nacimiento   = $request->get('fecha_nacimiento');
        $conductor->sexo               = $request->get('sexo');
        $conductor->telefono           = $request->get('telefono');
        $conductor->email              = $request->get('email');
        $conductor->categoria_licencia = $request->get('categoria_licencia');
        $conductor->save();
        return $conductor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conductor = Conductor::findOrFail($id);
        $conductor->delete();
        return $conductor;
    }
}
