<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\EmpresaUsuario;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'contato', 'carro_chefe', 'estacionamento', 'detalhes', 'formas_pagamentos',
        'bom_para', 'tipo_ambiente', 'site', 'facebook', 'instagram', 'latitude', 'longitude', 'tipo', 'cep',
        'politica', 'razao_social', 'cpf', 'cnpj', 'ativo', 'sobrenome', 'valido', 'endereco','bairro', 'numero',
        'cidade', 'estado', 'lim_produtos', 'lim_img_produtos', 'lim_img_usuario','categorias', 'destaque', 'nota_qualidade',
        'facebook_id', 'sexo', 'nascimento', 'whatsapp', 'youtube', 'token', 'nota_atendimento', 'nota_ambiente',
        'nota', 'notificacao', 'tipo_valor', 'valor_cupom', 'qtd_assinaturas', 'titulo_cartao', 'regulamento', 'delivery', 'frete',
        'tempo_entrega', 'plano', 'plano_expiracao', 'codigo_pagamento', 'numero_cartao','valor_ponto'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public static $rules = array(
        'name' => 'required | min:5',
        'email' => 'required | unique:users,email',
        // 'contato' => 'required | unique:users,contato'
    );

    public static function rules_update($id){
        return ['name' => 'required',
                'email' => 'required | unique:users,email,'.$id,
                // 'contato' => 'required | unique:users,contato,'.$id
        ];
    }

    public static $messages = array(
        'name.required' => 'O campo nome precisa ser informado. Por favor, você pode verificar isso?',
        'name.min' => 'O campo nome precisa ter o mínimo 5 caracteres. Por favor, você pode verificar isso?',
        'email.required' => 'O campo email precisa ser informado. Por favor, você pode verificar isso?',
        'email.unique' => 'O campo email já está em uso por outro usuário. Por favor, você pode verificar isso?',
        'contato.required' => 'O campo telefone precisa ser informado. Por favor, você pode verificar isso?',
        'contato.unique' => 'O campo telefone já está em uso por outro usuário. Por favor, você pode verificar isso?'
    );

    public function consumidores(){
        // muito louco isso aqui
        // a chave estrangeira da tabela empresas_usuarios é user_id entao pra encontrar quantos consumidores são temos buscar por empresa_id
        return $this->hasMany('App\EmpresaUsuario','empresa_id');
    }

    protected $table = 'users';
}
