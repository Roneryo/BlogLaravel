<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion = Post::findOrFail($id);
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
        $newPost = Post::findOrFail($id);
        $newPost->update($request->all());
        return $newPost;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        $disabledPost = Post::find($id);
        $disabledPost->idEstado=2;
        $disabledPost->save();
        return $disabledPost;
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function comments($id){
        // $postInfo = Post::find($id);
        // $postComments = Comment::where('idPublicacion',$id)->get();
        // echo $postComments;
        $comments = Post::find($id)->comentarios;
        return ($comments);
        // dd($comments);
        // count($comments);
        // return $postComments ;
    }
}
