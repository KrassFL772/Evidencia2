<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareas;

class TareasCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = tareas::all();
        return view('todos.index', ['todos' => $tareas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre'=>'required|min:1'
        ]);

        $tarea = new tareas;
        $tarea->Nombre= $request->Nombre;
        $tarea->save();

        return redirect()->route('todos')->with('success', 'Tarea creada satisfactoriamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
