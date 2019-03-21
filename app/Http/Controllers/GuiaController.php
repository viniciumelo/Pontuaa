<?php

namespace App\Http\Controllers;

use App\Guia;
use Illuminate\Http\Request;
use DateTime;
use Redirect;
use Auth;
use App\EmpresaUsuario;
use App\User;
use App\Pontos;
use App\Premio;

class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guia = 0;
        if(Auth::user()->vendedor){
            $guias = Guia::where('empresa_id', Auth::user()->id)->get();
        }
        else{
            $guias = Guia::where('empresa_id', Auth::user()->empresa_id)->get();
        }
            
        $premios = Premio::orderBy('nome')->get();
        //$lista = EmpresaUsuario::where('empresa_id', Auth::user()->id)->with('usuario')->paginate(10);
        return view('empresa.guias.guias')->with('usuarios', $guias)->with('premios', $premios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.guias.guias_edicao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guia = new Guia;
        $guia->empresa_id = Auth::user()->id;
        $guia->fill($request->all())->save();
        return redirect()->route('guia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guia  $guia
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
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
