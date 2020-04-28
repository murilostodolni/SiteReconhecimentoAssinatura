@extends('layouts.app')



@section('content')

<script language="javascript">
    function habilitacao(){
        if(document.getElementById('concordo').checked == true){
            window.location.href = "{{url('/home')}}";
        } else {
            document.getElementById('click').innerHTML = "Aceite os termos para poder iniciar analise!";
        }
    }
    function check(){
        if(document.getElementById('concordo').checked == true){
            document.getElementById('click').innerHTML = "";
        }
    }
</script>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo!</div>

                <div class="panel-body">
                        Clique nos <img src="assets/images/pontos.png"/> para fazer login ou registrar!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection