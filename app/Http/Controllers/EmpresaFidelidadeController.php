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

use App\User;
use App\Pontos;
use Redirect;
use Auth;

class EmpresaFidelidadeController extends Controller
{
    public function pontuar( Request $r )
    {
    	if(Auth::user()->valor_ponto <= 0)
    	{
    		//erro
    		return Redirect::back();
    	}

    	$ponto = new Pontos();
    	$ponto->loja_id = Auth::user()->id;
    	$ponto->user_id = $r->user_id;
		$ponto->valor = $r->valor;
		$conf = json_decode(Auth::user()->pontos_config);

		if($r->valor <= $conf->limite1->reais){
			$ponto->pontos = ceil( $r->valor * $conf->limite1->pontos );
		}
		elseif($r->valor > $conf->limite1->reais && $r->valor <= $conf->limite3->reais){
			$ponto->pontos = ceil( $r->valor * $conf->limite2->pontos );
		}
		elseif($r->valor > $conf->limite3->reais){
			$ponto->pontos = ceil( $r->valor * $conf->limite3->pontos );
		}
    	$ponto->save();

    	Session::flash('message', 'O consumidor foi pontuado com sucesso!');
        return redirect('/empresa/consumidores');
    }

    public function estornar( Request $r )
    {
    	$ponto = new Pontos();
    	$ponto->loja_id = Auth::user()->id;
    	$ponto->user_id = $r->user_id;
    	$ponto->valor = 0;
    	$ponto->pontos = $r->valor * -1;
    	$ponto->save();

    	Session::flash('message', 'Os pontos foram estornados do consumidor com sucesso!');
        return redirect('/empresa/consumidores');
	}
	
	public function configurarPontos(){

		$conf = json_decode(Auth::user()->pontos_config);

		return view('empresa.pontos.cadastrar',compact('conf'));
	}

	public function storeConfiguracaoPontos(Request $request){

		$user = User::find(Auth::user()->id);

		$j = [];
		$j["limite1"] = ["pontos" => $request->pontos1, "reais" => $request->valor1];
		$j["limite2"] = ["pontos" => $request->pontos2, "reais" => $request->valor2];
		$j["limite3"] = ["pontos" => $request->pontos3, "reais" => $request->valor3];

		$user->pontos_config = json_encode($j);
		$user->save();

		return redirect('/empresa/consumidores');
	}
}
