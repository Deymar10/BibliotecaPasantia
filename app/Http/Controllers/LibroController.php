<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::all();
        //$autor = DB::select('select a.nombre from autors a inner join libros b on a.id=b.id_autor where b.id_autor=?;', ['$libros']);
        return view('libros.index', compact('libros'));
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
        $libros = Libro::all();
        return view('libros.crearLibro', compact('libros','autor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLibroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibroRequest $request)
    {
        //
        $libros = new Libro;
        $libros->id_autor = $request->id_autor;
        $libros->titulo = $request->titulo;
        $libros->categoria = $request->categoria;

        $libros->save();
        return redirect('libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
        $autor = Autor::all();
        return view('libros.editarLibro', compact('libro','autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLibroRequest  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        //
        $validated = $request->validated();
        $libro->update($request->all());
        return redirect('libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
        $libro->delete();
        return redirect('libros')->with('eliminar','ok');
    }
}
