<?php

namespace App\Http\Controllers;

use App\Models\instructor;
use Illuminate\Http\Request;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mostrar= instructor::orderBy('nro_doc','desc')->paginate(5);
        return view('instructor.index',compact('mostrar'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo=new instructor();
        $nuevo->nro_doc = $request->nro_doc;
        $nuevo->nombre = $request->nombre;
        $nuevo->apellido = $request->apellido;

        $nuevo->save();

        $request->validate([
            'nro_doc' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
        
        instructor::create($request->post());

        return redirect()->route('instructor.index')->with('success','nuevo instructor creado exitosamente.');
        
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(instructor $instructor)
    {
        return view('instructor.show',compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(instructor $instructor)
    {
        return view('instructor.edit',compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instructor $instructor)
    {
        $request->validate([
            'nro_doc' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
        
        $instructor->fill($request->post())->save();

        return redirect()->route('instructor.index')->with('success','instructor ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(instructor $instructor)
    {
        $instructor->delete();
        return redirect()->route('instructor.index')->with('success','instructor ha sido desactivado correctamente');
    }
}