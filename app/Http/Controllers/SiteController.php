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


use laravel\pagseguro\Config\Config;
use laravel\pagseguro\Credentials\Credentials;
use laravel\pagseguro\Checkout\Facade\CheckoutFacade;

use Auth;
use Redirect;
use App\User;
use App\CategoriaEmpresa;
use App\Cidade;
use App\Estado;
use PagSeguro;

class SiteController extends Controller
{
    public function index(){
        return view('layouts.site');
    }

    public function empresa(){
        $data['dados'] = CategoriaEmpresa::orderBy('nome','asc')->get();
       $data['estados'] = Estado::orderBy('sigla', 'ASC')->get();
        return view('layouts.empresa', $data);
    }

    public function cadastrar( Request $r ){

        if ($r->password != $r->password_confirmation) {
            return Redirect::back()->withErrors(['As senhas estão diferentes, por favor verifique!'])->withInput();
        }

        $validator = Validator::make(Input::all(), User::$rules, User::$messages);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($messages)->withInput();
        }else{

            if (isset($r->plano)) {

                // if (Auth::user()->tipo == null) // admin
                // {
                //     if ($r->plano == 1) {
                //         $plano_expiracao = date('Y-m-d',strtotime(date("Y-m-d") . " + 180 day"));
                //     }else if ($r->plano == 2) {
                //         $plano_expiracao = date('Y-m-d',strtotime(date("Y-m-d") . " + 365 day"));
                //     }

                //     $numero_cartao = RAND_NUMERO_CARTAO();
                //     $user = User::where('numero_cartao', $numero_cartao)->first();

                //     while(isset($user)){
                //         $numero_cartao = RAND_NUMERO_CARTAO();
                //         $user = User::where('numero_cartao', $numero_cartao)->first();
                //     }

                //     $u =
                //     User::create([
                //         'name' => $r->name,
                //         'email' => $r->email,
                //         'password' => bcrypt($r->password),
                //         'contato' => $r->contato,
                //         'sexo' => $r->sexo,
                //         'nascimento' => $r->nascimento,
                //         'tipo' => '1',
                //         'categorias' => '',
                //         'plano' => $r->plano,
                //         'codigo_pagamento' => 'CADASTRADO PELO ADMIN',
                //         'plano_expiracao' => $plano_expiracao,
                //         'numero_cartao' => $numero_cartao
                //     ]);
                // }
                // else
                // {
                    $u =
                    User::create([
                        'name' => $r->name,
                        'email' => $r->email,
                        'password' => bcrypt($r->password),
                        'contato' => $r->contato,
                        'sexo' => $r->sexo,
                        'nascimento' => $r->nascimento,
                        'tipo' => '1',
                        'categorias' => '',
                        'plano' => $r->plano
                    ]);

                // }


                $valor = $r->plano == 1 ? 10 : 20;

                $data = [
                    'items' => [
                        [
                            'id' => $u->id,
                            'description' => 'Compra Plano VIP '.getenv('APP_NAME'),
                            'quantity' => '1',
                            'amount' => $valor,
                            'weight' => '0',
                            'shippingCost' => '0',
                            'width' => '0',
                            'height' => '0',
                            'length' => '0',
                        ],
                    ],
                    'shipping' => [
                        'address' => [
                            'postalCode' => '04696000',
                            'street' => 'Av. Engenheiro Eusébio Stevaux',
                            'number' => '823',
                            'district' => 'São Paulo',
                            'city' => 'São Paulo',
                            'state' => 'SP',
                            'country' => 'BRA',
                        ],
                        'type' => 2,
                        'cost' => 0,
                    ],
                    'sender' => [
                        'email' => $r->email,
                        //'email' => 'v39145842824427404743@sandbox.pagseguro.com.br',
                        'name' => $r->name,
                        'documents' => [],
                        'phone' => '63984866017',
                        'bornDate' => $r->nascimento,
                    ]
                ];

               // Config::set('use-sandbox', true);
                $facade = new CheckoutFacade();
                $credentials = new Credentials(getenv('PAGSEGURO_TOKEN'), getenv('PAGSEGURO_EMAIL'));
                $checkout = $facade->createFromArray($data);
                $information = $checkout->send($credentials);

                //dd($information);

                if ($information) {

                    // $u->codigo_pagamento = $information->getCode();
                    // $u->save();

                    // print_r($information->getCode());
                    // print_r($information->getDate());
                    // print_r($information->getLink());
                    return Redirect::to($information->getLink());
                }else{
                    //caso de erro delete o usuario
                    User::find($u->id)->delete();
                    return Redirect::back()->withErrors(['Algo deu errado durante o processando, tente novamente.'])->withInput();
                }


            }else{
                return Redirect::back()->withErrors(['É necessário selecionar um plano.'])->withInput();
            }
        }
    }

    public function cadastrarEmpresa( Request $r ){



        if ($r->password != $r->password_confirmation) {
            return Redirect::back()->withErrors(['As senhas estão diferentes, por favor verifique!'])->withInput();
        }

        $validator = Validator::make(Input::all(), User::$rules, User::$messages);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($messages)->withInput();
        }else{

            if (isset($r->plano) && $r->plano != '') {



                if ($r->foto != ''){
                    $imageName = md5(date('YmdHis')).'.'.$r->file('foto')->getClientOriginalExtension();
                    $r->file('foto')->move(base_path().'/public/uploads/usuarios/', $imageName);                   
                }



                  

                if($r->plano == 3){
                    $valor = $r->valor == 1 ? 120 :  180;
                    $valorUnico  = $r->valor  == 1 ? 120/6 : 180/12;
                    $nomePlano = 'bronze';

                }
                if($r->plano == 4){
                    $valor = $r->valor == 1 ? 360 :  540;
                    $valorUnico  = $r->valor  == 1 ? 360/6 : 540/12;
                     $nomePlano = 'prata';
                }

                if($r->plano == 5){
                    $valor = $r->valor == 1 ? 570 :  840;
                    $valorUnico  = $r->valor  == 1 ? 570/6 : 840/12;
                     $nomePlano = 'ouro';
                }




            

        $email = 'iuri765@gmail.com';
        $token = '9B08B09A989648CCAB9D3C4E82522A27';
        $url = 'https://ws.pagseguro.uol.com.br/v2/pre-approvals/request?email=' . $email . '&token=' . $token;
        $u =
        User::create([
            'name' => $r->name,         
            'cnpj' => $r->razao_cnpj,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'contato' => $r->contato,
            'sexo' => $r->sexo,
            'nascimento' => $r->nascimento,
            'tipo' => '0',
            'categorias' => $r->categorias,
            'plano' => $r->plano,
            'cidade' => $r->cidade,
            'foto' => $imageName
        ]);

        $vencimento =$r->valor == 1 ? date("c", strtotime("+ 6 month")) : date("c", strtotime("+ 12 month")) ;
        $xml = '<?xml version="1.0" encoding="ISO-8859-1" standalone="yes"?>
        <preApprovalRequest>
            <redirectURL>http://acheimaisdescontos.com/retorno</redirectURL>
            <reviewURL>http://acheimaisdescontos.com/revisao</reviewURL>
            <reference>'.$u->id.'</reference>
            <sender>
            <name>'.$r->name.'</name>
            <email>'.$r->email.'</email>
            <phone>
            <areaCode>11</areaCode>
             <number>56273440</number>
             </phone>
             <address>
             <street>Avenida Brigadeiro Faria Lima</street>
             <number>138121214</number>
             <complement>1 Andar</complement>
             <district>Jardim Paulistano</district>
             <postalCode>01452002</postalCode>
             <city>São Paulo</city>
             <state>SP</state>
             <country>BRA</country>
             </address>
             </sender>
             <preApproval>
                <charge>auto</charge>
                <name>Plano '.$nomePlano.'</name>
                <details>Todo dia '.date('d').' sera cobrado o valor de '.number_format($valorUnico,2) .' referente ao plano '.$nomePlano.'
                        roubo de Notebook</details>
                <amountPerPayment>'.number_format($valorUnico,2) .'</amountPerPayment>
                <period>Monthly</period>
                <finalDate>'.$vencimento.'</finalDate>
                <maxTotalAmount>'.number_format($valor,2).'</maxTotalAmount>
            </preApproval>
        </preApprovalRequest>

        ';



        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, Array('Content-Type: application/xml; charset=ISO-8859-1'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $xml);
        $xml= curl_exec($curl);
        
        if($xml == 'Unauthorized'){
            //Insira seu código avisando que o sistema está com problemas, sugiro enviar um e-mail avisando para alguém fazer a manutenção 
        
           
            exit;//Mantenha essa linha
        }
        
        curl_close($curl);
        
        $xml= simplexml_load_string($xml);

 
        
        if(count($xml -> error) > 0){
            //Insira seu código avisando que o sistema está com problemas, sugiro enviar um e-mail avisando para alguém fazer a manutenção, talvez seja útil enviar os códigos de erros.
           //dd($xml);
            exit;
        }

        //Adicionando codigo referente ao pagamento
        User::find($u->id)->update(['codigo_pagamento' =>  $xml->code]);
      
        return Redirect::to('https://pagseguro.uol.com.br/v2/pre-approvals/request.html?code=' . $xml -> code);

               

            }else{
                return Redirect::back()->withErrors(['É necessário selecionar um plano.'])->withInput();
            }
        }
    }


    public function ApiCidades(Request $r){

        $cod_estados = $r->estados;

        $data = Cidade::where('estados_cod_estados',$cod_estados)->orderBy('nome','asc')->pluck('nome','cod_cidades');

        return response()->json($data);

    }

    public function retornoAssinatura(){
        return view('layouts.confirmacao');
    }
}

