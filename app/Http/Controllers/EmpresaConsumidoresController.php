<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

use DateTime;
use Redirect;
use Auth;
use App\EmpresaUsuario;
use App\User;
use App\Pontos;
use App\Premio;
use App\Guia;
use App\Consumidor;

class EmpresaConsumidoresController extends Controller
{
    public function index(){
        /*$usuarios_ids = EmpresaUsuario::where('empresa_id', Auth::user()->id)->pluck('user_id');
        User::whereIn('id', $usuarios_ids)->where('tipo',1)->paginate(10);*/
        $lista;
        if(Auth::user()->empresa_id == 0 && Auth::user()->vendedor == 0){ //se n tiver id entao é a propria empresa
            $lista = Consumidor::where('user_id',Auth::user()->id)->paginate(10);
            
        }
        else{
            $lista = Consumidor::where('user_id',Auth::user()->empresa_id)->paginate(10);
            
        }
        foreach ($lista as $u) {
            //$u->saldo = Pontos::where('vendedor_id', $u->user_id)->sum('pontos.pontos');
            $u->saldo = Pontos::where('consumidor_id', $u->id)->sum('pontos.pontos');
        }
        $guias = Guia::where('empresa_id',Auth::user()->id)->get();
        

        $premios = Premio::orderBy('nome')->get();
        //$lista = EmpresaUsuario::where('empresa_id', Auth::user()->id)->with('usuario')->paginate(10);
        return view('empresa.usuarios.usuarios')->with('usuarios', $lista)->with('premios', $premios)->with('guias',$guias);
    }

    public function aniversariantes(){
      $empresa_id = 0;
      if (Auth::user()->empresa_id > 0){
          $empresa_id = Auth::user()->empresa_id; // se for funcionario o ID é o id do dono
      }
      else{
          $empresa_id = Auth::user()->id; // se for dono da loja ID é 0
      }
    	$mes = date('m');

    	//$usuarios_ids = EmpresaUsuario::where('empresa_id', Auth::user()->id)->pluck('user_id');
      
      $lista = Consumidor::where('user_id', $empresa_id)->where('ativo',1)->whereNotNull('nascimento')->whereMonth('nascimento',$mes)->paginate(10);

        //$lista = EmpresaUsuario::where('empresa_id', Auth::user()->id)->with('usuario')->paginate(10);
        return view('empresa.usuarios.usuarios')->with('usuarios', $lista)->with('niver', '1');
    }

    public function buscar(){
        $q = $_GET['q'];

        $usuarios_ids = EmpresaUsuario::where('empresa_id', Auth::user()->id)->pluck('user_id');
        $lista = User::whereIn('id', $usuarios_ids)->where('tipo',1)->where('name','like','%'.$q.'%')->paginate(10);

        return view('empresa.usuarios.usuarios')->with('usuarios', $lista)->with('q', $q);
    }

    public function create(){
        $guias = Guia::where('empresa_id',Auth::user()->id)->get();
        return view('empresa.usuarios.usuario_edicao')->with('guias',$guias);
    }

    public function insert(Request $r){
        $validator = Validator::make(Input::all(), Consumidor::$rules, Consumidor::$messages);
        if ($validator->fails()) {            
            return Redirect::back()->withErrors($validator);
        }else{
            $c = new Consumidor();
            $c->fill($r->all());
            $c->guia_id = $r->guia_id;
            if(Auth::user()->empresa_id == 0){ //se n tiver id entao é a propria empresa
                $c->user_id = Auth::user()->id;
            }
            else{
                $c->user_id = Auth::user()->empresa_id;
            }
            //$c->remember_token = md5(uniqid(""));
            // id do guia
            $c->save();

            /*$ref = new EmpresaUsuario();
            $ref->user_id = $c->id;
            $ref->empresa_id = Auth::user()->id;
            $ref->save();*/

            Session::flash('message', 'Consumidor cadastrado com sucesso!');
            return redirect('/empresa/consumidores');
        }
    }  

    public function edit($id){
        $c = Consumidor::find($id);
        $guias = Guia::where('empresa_id',Auth::user()->id)->get();
        return view('empresa.usuarios.usuario_edicao')->with('usuario', $c)->with('guias',$guias);
    }

    public function update(Request $r, $id){
        $validator = Validator::make(Input::all(), User::rules_update($id), User::$messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }else{
            $u = Consumidor::find($id);            

            $u->fill($r->all());

            $u->save(); 

            Session::flash('message', 'Os dados do consumidor foram alterados com sucesso!');
            return redirect('/empresa/consumidores');
        }
    }

   //  public function insert(Request $r)
   //  {
   //      $validator = Validator::make(Input::all(), User::$rules, User::$messages);
   //  	if ($validator->fails()) {
	  //       $messages = $validator->messages();
   //          return $messages;
   //      }else{			

   //          $u = 
   //          User::create([
   //              'name' => $r->name,
   //              'sobrenome' => $r->sobrenome,
   //              'sexo' => $r->sexo,
   //              'email' => $r->email,
   //              'password' => bcrypt('!!!sem@senha!!!'),
   //              'contato' => $r->contato,
   //              'sexo' => $r->sexo,
   //              'nascimento' => $r->nascimento,
   //              'tipo' => '1',		
   //              'categorias' => ''
   //          ]);

			// return $u;
   //      }
   //  }   
}
