@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo!</div>

                <div class="panel-body">
                        Essa pesquisa tem como objetivo o estudo das tecnicas de grafostécnica para os programas de 
                        pós-graduação em Perícia Forence e Engenharia da Computação da Uniservidade de Pernambuco.
                        <br>
                        <br>
                        <button><a href="{{url('/termo')}}" target="_blank">Termo de Consentimento (abre em nova aba)</a></button>
                        <br>
                        <br>
                        <button><a href="{{url('/home')}}">Clique aqui para iniciar</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
