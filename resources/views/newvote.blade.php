@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Agradecemos pela analise!</div>

                <div class="panel-body">
                        Deseja fazer outra analise?
                        <br>
                        <br>
                        <button><a href="{{url('home')}}">Sim</a></button> &emsp;&emsp;
                        <button><a href="{{url('final')}}">Não</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection