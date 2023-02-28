<?php

namespace App\Http\Controllers;

use App\Models\ambiente;
use Illuminate\Http\Request;

class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mostrar= ambiente::orderBy('nro_ambiente','desc')->paginate(5);
        return view('ambiente.index',compact('mostrar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ambiente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo=new ambiente();
        $nuevo->nro_ambiente = $request->nro_ambiente;
        $nuevo->nombre_ambiente = $request->nombre_ambiente;
        $nuevo->aforo = $request->aforo;
        $nuevo->especialidad = $request->especialidad;

        $nuevo->save();

        $request->validate([
            'nro_ambiente' => 'required',
            'nombre_ambiente' => 'required',
            'aforo' => 'required',
            'especialidad' => 'required'
        ]);
        
        ambiente::create($request->post());

        return redirect()->route('ambiente.index')->with('success','nuevo ambiente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ambiente $ambiente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ambiente $ambiente)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ambiente $ambiente)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ambiente $ambiente)
    {
        
    }
}
