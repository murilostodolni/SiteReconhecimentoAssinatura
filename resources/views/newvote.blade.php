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
                        <a class="btn btn-primary" href="{{ url('home') }}" role="button">
                        <i class="glyphicon glyphicon-thumbs-up"></i>&ensp;Sim</a>&emsp;&emsp;
                        <a class="btn btn-danger" onclick="myFunction()" href="{{ url('/logout') }}" role="button">
                        <i class="glyphicon glyphicon-log-out"></i>&ensp;Depois</a>
                        <!--<button><a href="{{url('finalizar_votacao')}}" style="color:red">Não desejo mais fazer analises</a></button>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection