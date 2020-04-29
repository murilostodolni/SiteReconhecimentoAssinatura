@extends('layouts.app')

@section('content')

<script>
function myFunction() {
  alert("Esperamos que você volte em breve para continuar sua contribuição.");
}
</script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Agradecemos pela contribuição!</div>

                <div class="panel-body">
                        Deseja continuar contribuindo?
                        <br>
                        <strong>Você já realizou {{ $qtd_votes }} análise(s) de um total de 10.</strong> 
                        <br>
                        <br>
                        <button><a href="{{url('home')}}">Sim</a></button> &emsp;&emsp;
                        <button onclick="myFunction()"><a href="{{ url('/logout') }}">Depois</a></button> &emsp;&emsp;
                        <!--<button><a href="{{url('finalizar_votacao')}}" style="color:red">Não desejo mais fazer analises</a></button>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection