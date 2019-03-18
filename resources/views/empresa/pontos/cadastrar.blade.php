@extends('layouts.app')

@section('title', 'Configurar Pontos')

@section('content')

<div class="container-fluid">
    <div class="row u-mb-large">
            <div class="col-12">
                <form method="POST" action="{{route('conf.pontos')}}">
                    {{ csrf_field() }}
        
                    <div class="row">
                        <div class="col c-field u-mb-small">
                            <label class="c-field__label" for="pontos1">Pontos 1</label> 
                            <input class="c-input" required type="text" id="pontos1" name="pontos1"  @if(isset($conf->limite1->pontos)) value="{{ $conf->limite1->pontos }}" @endif>
                            <p style="color: crimson; font-size: 0.7em">Pontos ganhos até a quantia do valor da compra</p>
                        </div>
                        
                        <div class="col c-field u-mb-small">
                            <label class="c-field__label" for="valor1">Valor da Compra 1</label> 
                            <input class="c-input" step=".01" type="number" id="valor1" name="valor1" required @if(isset($conf->limite1->reais)) value="{{ $conf->limite1->reais }}" @endif>
                            <p style="color: crimson; font-size: 0.7em">Ganhará x pontos até esse valor</p>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col c-field u-mb-small">
                            <label class="c-field__label" for="pontos2">Pontos 2</label> 
                            <input class="c-input" required type="text" id="pontos2" name="pontos2" @if(isset($conf->limite2->pontos)) value="{{ $conf->limite2->pontos }}" @endif>
                            <p style="color: crimson; font-size: 0.7em">Pontos ganhos até a quantia do valor da compra</p>
                        </div>
                        
                        <div class="col c-field u-mb-small">
                            <label class="c-field__label" for="valor2">Valor da Compra 2</label> 
                            <input class="c-input" step=".01" type="number" id="valor2" name="valor2" required @if(isset($conf->limite2->reais)) value="{{ $conf->limite2->reais }}" @endif>
                            <p style="color: crimson; font-size: 0.7em">Ganhará x pontos até esse valor</p>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col c-field u-mb-small">
                            <label class="c-field__label" for="pontos3">Pontos 3</label> 
                            <input class="c-input" required type="text" id="pontos3" name="pontos3" @if(isset($conf->limite3->pontos)) value="{{ $conf->limite3->pontos }}" @endif>
                            <p style="color: crimson; font-size: 0.7em">Pontos ganhos até a quantia do valor da compra</p>
                        </div>
                        
                        <div class="col c-field u-mb-small">
                            <label class="c-field__label" for="valor3">Valor da Compra 3</label> 
                            <input class="c-input" step=".01" type="number" id="valor3" name="valor3" required @if(isset($conf->limite3->reais)) value="{{ $conf->limite3->reais }}" @endif>
                            <p style="color: crimson; font-size: 0.7em">Ganhará x pontos até esse valor</p>
                        </div>
                    </div>
        
                    <button class="c-btn c-btn--info" type="submit">
                        Configurar
                    </button>
        
                </form>
            </div>
    </div>
</div>
@endsection