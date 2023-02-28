<?php

namespace App\Http\Controllers;

use App\Models\sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mostrar= sede::orderBy('codigo','desc')->paginate(5);
        return view('sede.index',compact('mostrar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sede.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $nuevo=new sede();
            $nuevo->codigo = $request->codigo;
            $nuevo->nombre_sede = $request->nombre_sede;
            $nuevo->especialidad_sede = $request->especialidad_sede;
    
            $nuevo->save();
    
            $request->validate([
                'codigo' => 'required',
                'nombre_sede' => 'required',
                'especialidad_sede' => 'required'
            ]);
            
            sede::create($request->post());
    
            return redirect()->route('sede.index')->with('success','nueva sede creado exitosamente.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(sede $sede)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sede $sede)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sede $sede)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sede $sede)
    {
      
    }
}
