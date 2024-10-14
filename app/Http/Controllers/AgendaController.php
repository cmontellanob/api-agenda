<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda=Agenda::all();
        return response()->json($agenda,200);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agenda=Agenda::create($request->all());
        return response()->json($agenda,201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agenda=Agenda::find($id);
        return response()->json($agenda,200);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //editar


        $agenda=Agenda::find($id);
        $input=$request->all();
        $agenda->update($input);

        return response()->json($agenda,200);

        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $agenda=Agenda::find($id);
        $agenda->delete();
        return response()->json($agenda,200);
    }
}
