<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaAddREquest;
use App\Http\Requests\PersonaEditREquest;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([Persona::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaAddREquest $request)
    {
        Persona::create($request->all());
        return response()->json([
            'respuesta' => true,
            'personas' => 'Dato de la persona guardado correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return response()->json([
            'respuesta' => true,
            'personas' => $persona
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaEditREquest $request, Persona $persona)
    {
        $persona->update($request->all());
        return response()->json([
            'respuesta' => true,
            'personas' => 'Dato de la persona actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return response()->json([
            'respuesta' => true,
            'personas' => 'Dato de la persona eliminado correctamente'
        ]);
    }
}
