<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conteudo;

class conteudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admweb.administrador.conteudo');
        $conteudos = Conteudo::all();
        return view('admweb.administrador.conteudo', compact('conteudos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admweb.administrador.criar_conteudo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cont = new Conteudo();
        $cont->titulo = $request->input('titulo');
        $cont->texto = $request->input('conteudo');
        $cont->save();
        return redirect('admweb/conteudo');
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
        $cont = Conteudo::find($id);
        if(isset($cont)) {
            return view('admweb.administrador.editar_conteudo', compact('cont'));
        }
        return redirect('admweb/conteudo');
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
        $cont = Conteudo::find($id);
        if(isset($cont)) {
            $cont->titulo = $request->input('titulo');
            $cont->texto = $request->input('conteudo');
            $cont->save();
        }
        return redirect('admweb/conteudo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cont = Conteudo::find($id);
        if (isset($cont)) {
            $cont->delete();
        }
        return redirect('admweb/conteudo');
    }
}
