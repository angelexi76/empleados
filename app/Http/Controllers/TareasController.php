<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;

/**
 * Class TareaController
 * @package App\Http\Controllers
 */
class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tareas::all();

        return view('tareas.index', compact('tareas'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tareas = new Tareas();
        return view('tareas.create', compact('tareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
          $tareas =new Tareas;
          $tareas->title=$request->input('title');
          $tareas->description=$request->input('description');
          $tareas->empleados_id=$request->input('empleados_id');

          $tareas->save();
           

       

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea ralizada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tareas = Tareas::find($id);

        return view('tareas.show', compact('tareas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tareas = Tareas::find($id);

        return view('tareas.edit', compact('tareas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tareas $tareas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tareas $tareas)
    {
             $tareas->update($request->all());



   

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarea = Tareas::find($id)->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea Borrada ');
    }
}
