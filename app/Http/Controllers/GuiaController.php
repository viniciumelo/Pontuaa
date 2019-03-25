<?php

namespace App\Http\Controllers;

use App\Guia;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
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
            $guias = Guia::where('empresa_id', Auth::user()->empresa_id)->get();
            
        }
        else{
            $guias = Guia::where('empresa_id', Auth::user()->id)->get();
            foreach($guias as $guia){
                $guia->pontos = 
                    Pontos::where('guia_id',$guia->id)->sum('pontos.pontos');
                
            }
            
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
        $guia = Guia::find($id);
        
        if(Auth::user()->empresa_id){ // se for vendedor entao vai ter empresa_id
            
            if(Auth::user()->empresa_id == $guia->empresa_id){
                return view('empresa.guias.guias_edicao')->with('usuario', $guia);
            }
        }
        elseif(Auth::user()->id === $guia->empresa_id){
            
            return view('empresa.guias.guias_edicao')->with('usuario', $guia);
        }
        return abort(404);
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

        $guia = Guia::find($id);
        
        if(Auth::user()->empresa_id){ // se for vendedor entao vai ter empresa_id
            if(Auth::user()->empresa_id == $guia->empresa_id){
                $guia->fill($request->all())->save();
                return redirect()->route('guia.index');
            }
        }
        elseif(Auth::user()->id === $guia->empresa_id){
            $guia->fill($request->all())->save();
            return redirect()->route('guia.index');
        }
        return abort(404);

        return redirect()->route('guia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Guia::findOrFail($id)->delete();
        }
        catch (QueryException $ex){
            return redirect()->route('guia.index');
        }
    }
}
