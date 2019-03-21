@extends('layouts.app')

@if(isset($usuario))
    @section('title', 'Editar Consumidor')
@else
    @section('title', 'Cadastrar Consumidor')
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
                    action="{{route('guia.store')}}"
                @else
                    action="{{route('guia.update',$usuario->id)}}"
                @endif
            >
                {{ csrf_field() }}
                @if(isset($usuario)) 
                    @method('PUT')
                @endif
                <div class="row">

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="nome">Nome</label> 
                        <input class="c-input" type="text" id="nome" name="nome" required
                        @if(isset($usuario)) value="{{ $usuario->nome }}" @endif> 
                    </div>     

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="endereco">Endereço</label> 
                        <input class="c-input" type="text" id="nome" name="nome"
                        @if(isset($usuario)) value="{{ $usuario->nome }}" @endif> 
                    </div>                

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="cpf">CPF</label> 
                        <input class="c-input" type="text" id="cpf" name="cpf" required
                        @if(isset($usuario)) value="{{ $usuario->cpf }}" @endif> 
                    </div>
                    
                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="banco">Banco</label> 
                        <input class="c-input" type="text" id="banco" name="banco"
                        @if(isset($usuario)) value="{{ $usuario->banco }}" @endif> 
                    </div>

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="agencia">Agência</label> 
                        <input class="c-input" type="text" id="agencia" name="agencia"
                        @if(isset($usuario)) value="{{ $usuario->agencia }}" @endif> 
                    </div>

                    <div class="col-md-4 c-field u-mb-small">
                        <label class="c-field__label" for="conta">Conta</label> 
                        <input class="c-input" type="text" id="conta" name="conta"
                        @if(isset($usuario)) value="{{ $usuario->conta }}" @endif> 
                    </div>
                <!--                    
                    <div class="col-md-4 c-field u-mb-small">
                    <div class="c-field u-mb-medium">
                        <label class="c-field__label" for="select1">Ativo</label>

                         Select2 jquery plugin is used 
                        <select class="c-select" id="select1" name="ativo">
                            <option value="1" @if(isset($usuario) && $usuario->ativo == 1) selected @endif>Sim</option>
                            <option value="0" @if(isset($usuario) && $usuario->ativo == 0) selected @endif>Não</option>                            
                        </select>
                    </div>
                    </div>
                -->                  
                </div>               
                <button class="c-btn c-btn--info" type="submit">Salvar</button>                    

            </form>
        </div>                
    </div><!-- // .row -->
</div>

@endsection