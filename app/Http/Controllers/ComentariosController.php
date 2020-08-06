<?php

namespace App\Http\Controllers;

use App\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comentarios::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Comentarios::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentario = Comentarios::findOrFail($id);
        return $comentario;
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
        $newComment = Comentarios::findOrFail($id);
        $newComment->update($request->all());
        return $newComment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentarios  $Comentarios
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        $disabledComment = Comentarios::find($id);
        $disabledComment->idEstado=2;
        $disabledComment->save();
        return $disabledComment;
    }
}
