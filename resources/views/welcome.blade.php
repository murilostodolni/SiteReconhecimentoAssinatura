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
                        Essa pesquisa tem como objetivo o estudo das tecnicas de grafostécnica para os programas de 
                        pós-graduação em Perícia Forence e Engenharia da Computação da Uniservidade de Pernambuco.
                        <br><br>
                        <strong>OBS:</strong> As analises não precisam ser feitas todas de uma vez,
                        você pode sair e entrar novamente com o mesmo login e senha quantas vezes forem necessário.
                        <br><br>
                        <button><a href="{{url('/termo')}}">Termos de consentimento e confidencialidade</a></button>
                        <br><br>
                        <input type="checkbox" id="concordo" value="concordo" onClick="check()">
                        <label for="male">Concordo com os termos</label><br><br>
                        <i>Os critérios de avaliação para realização das análises grafotécnicas nessa pesquisas são
                        baseados nas literaturas de:<br>
                        [FALAT, 2012]<br>
                        [SILVA E FEUERHARMEL, 2013]<br>
                        [MENDES, 2015]</i>
                        <br><br>
                        <button type="button" id='botao' onClick="habilitacao()">Clique para iniciar</button>
                        <strong><div id="click" style="color:red"></div></strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
