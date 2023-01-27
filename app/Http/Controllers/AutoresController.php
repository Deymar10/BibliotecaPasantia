<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAutorRequest;
use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autor = Autor::all();
        return view('autores.index', compact('autor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $autor = Autor::all();
        return view('Autores.crear', compact('autor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $autor = new Autor;
        $autor->nombre = $request->nombre;
        $autor->apellido = $request->apellido;
        $autor->correo = $request->correo;
        $autor->telefono = $request->telefono;

        $autor->save();
        return redirect('autor');
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
    public function edit(Autor $autor)
    {
        //
        return view('Autores.editar', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        //
        $validated = $request->validated();
        $autor->update($request->all());
        return redirect('/autor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //
        $autor->delete();
        return redirect('autor')->with('eliminar','ok');
    }
}
