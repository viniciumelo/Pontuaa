@extends('layouts.app')

@if(isset($usuario))
    @section('title', 'Editar Usuário')
@else
    @section('title', 'Cadastrar Usuário')
@endif

@section('content')

<div class="container-fluid">

    @if (Session::has('errors'))
        @foreach ($errors->all() as $error)
        <div class="c-alert c-alert--danger alert">
            <i class="c-alert__icon fa fa-times-circle"></i> {{ $error }}
            <button class="c-close" data-dismiss="alert" type="button">×</button>
        </div>    
        @endforeach
    @endif    

    <div class="row u-mb-large">
        <div class="col-md-12">
            <form class="c-search-form c-search-form--dark" method="POST" 
                @if(!isset($usuario)) 
                    action="/admin/usuario/cadastrar"
                @else
                    action="/admin/usuario/editar/{{ $usuario->id }}"
                @endif
            >
                {{ csrf_field() }}
                <div class="row">

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="name">Nome</label> 
                        <input class="c-input" type="text" id="name" name="name" required
                        @if(isset($usuario)) value="{{ $usuario->name }}" @endif> 
                    </div>     

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="sobrenome">Sobrenome</label> 
                        <input class="c-input" type="text" id="sobrenome" name="sobrenome"
                        @if(isset($usuario)) value="{{ $usuario->sobrenome }}" @endif> 
                    </div>                
                    
                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="email">E-mail</label> 
                        <input class="c-input" type="email" id="email" name="email" required
                        @if(isset($usuario)) value="{{ $usuario->email }}" @endif>  
                    </div>

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="cpf">CPF</label> 
                        <input class="c-input" type="text" id="cpf" name="cpf" required
                        @if(isset($usuario)) value="{{ $usuario->cpf }}" @endif> 
                    </div>
                    
                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="contato">Contato</label> 
                        <input class="c-input" type="text" id="contato" name="contato"
                        @if(isset($usuario)) value="{{ $usuario->contato }}" @endif> 
                    </div>
                    
                    <div class="col-md-4 c-field u-mb-small">
                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="select1">Ativo</label>

                        <!-- Select2 jquery plugin is used -->
                        <select class="c-select" id="select1" name="ativo">
                            <option value="1" @if(isset($usuario) && $usuario->ativo == 1) selected @endif>Sim</option>
                            <option value="0" @if(isset($usuario) && $usuario->ativo == 0) selected @endif>Não</option>                            
                        </select>
                    </div>
                    </div>

                     <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="senha">Senha</label> 
                        <input class="c-input" type="password" id="senha" name="senha"> 
                    </div>

                    <div class="col-md-4 c-field u-mb-small">
                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="select2">Plano VIP</label>

                        <!-- Select2 jquery plugin is used -->
                        <select class="c-select" id="select2" name="plano">
                            <option value="">Selecione...</option>
                            <option value="1" @if(isset($usuario) && $usuario->plano == 1) selected @endif>Básico</option>
                            <option value="0" @if(isset($usuario) && $usuario->plano == 2) selected @endif>Premium</option>                            
                        </select>
                    </div>
                    </div>
                    
                    
                </div>               
                <button class="c-btn c-btn--info" type="submit">Salvar</button>                    

            </form>
        </div>                
    </div><!-- // .row -->
</div>

@endsection