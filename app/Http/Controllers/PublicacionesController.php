<?php

namespace App\Http\Controllers;

use App\Publicaciones;
use Illuminate\Http\Request;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Publicaciones::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Publicaciones::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion = Publicaciones::findOrFail($id);
        return $publicacion;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newPost = Publicaciones::findOrFail($id);
        $newPost->update($request->all());
        return $newPost;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        $disabledPost = Publicaciones::find($id);
        $disabledPost->idEstado=2;
        $disabledPost->save();
        return $disabledPost;
    }
}
