<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Microbus;

class MicrobusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $microbus = Microbus::all();
        return $microbus;
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
        $microbus                        = new Microbus();
        $microbus->placa                 = $request->get('placa');
        $microbus->modelo                = $request->get('modelo');
        $microbus->cantidad_asientos     = $request->get('cantidad_asientos');
        $microbus->linea                 = $request->get('linea');
        $microbus->numero_interno        = $request->get('numero_interno');
        $microbus->fecha_asignacion      = $request->get('fecha_asignacion');
        $microbus->fecha_baja            = $request->get('fecha_baja');
        $microbus->conductor_id          = $request->get('conductor_id');
        $microbus->save();
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
        $microbus                        = Microbus::findOrFail($id);
        $microbus->placa                 = $request->get('placa');
        $microbus->modelo                = $request->get('modelo');
        $microbus->cantidad_asientos     = $request->get('cantidad_asientos');
        $microbus->linea                 = $request->get('linea');
        $microbus->numero_interno        = $request->get('numero_interno');
        $microbus->fecha_asignacion      = $request->get('fecha_asignacion');
        $microbus->fecha_baja            = $request->get('fecha_baja');
        $microbus->conductor_id          = $request->get('conductor_id');
        $microbus->save();
        return $microbus;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $microbus = Microbus::findOrFail($id);
        $microbus->delete();
        return $microbus;
    }
}
