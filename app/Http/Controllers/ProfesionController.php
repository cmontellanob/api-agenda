<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesion;
class ProfesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesion=Profesion::all();
        return response()->json($profesion,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesion=Profesion::create($request->all());
        return response()->json($profesion,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profesion=Profesion::find($id);
        return response()->json($profesion,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $profesion=Profesion::find($id);
        $profesion->update($request->all());
        return response()->json($profesion,200);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $profesion=Profesion::find($id);
        $profesion->delete();
        return response()->json($profesion,200);
    }
}
