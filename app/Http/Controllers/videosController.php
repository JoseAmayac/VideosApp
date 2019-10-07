<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Session;

class videosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        //
        return view('listar',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $video = Video::find($id);
        $retorno = 0;
        $nombre = "";
        //$otro_id = $request -> input('id_video_eliminar');
        if($video)
        {
            $nombre = $video->nombre;
            $retorno =  $video->delete();
        }else{
            $nombre = "Sin nombre";
        }

        if($retorno == 1)
        {
            Session::flash('status','El video '. '"'.$nombre.'"' .' ha sido eliminado');
        }else{
            Session::flash('error','No se pudo eliminar el video' );
        }
        return redirect('/lista');
    }
}
