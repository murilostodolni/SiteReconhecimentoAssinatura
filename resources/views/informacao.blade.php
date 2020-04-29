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
                <div class="panel-heading">Informações Importantes</div>

                <div class="panel-body">
                        Essa pesquisa tem como objetivo o estudo dos critérios e procedimentos utilizados pela
                        grafotécnica. Estão envolvidos nessa pesquisa estudantes e pesquisadores dos programas
                        de pós-graduação em Perícia Forense e Engenharia da Computação da Universidade de Pernambuco.
                        <br><br>
                        <strong>OBS:</strong> As análises não precisam ser feitas todas de uma vez,
                        você pode sair e entrar novamente com o mesmo login e senha cadastrados
                        quantas vezes forem necessário.
                        <br><br>
                        <button><a href="{{url('/termo')}}">Termos de Consentimento e Confidencialidade</a></button>
                        <br><br>
                        <input type="checkbox" id="concordo" value="concordo" onClick="check()">
                        <label for="male">Concordo com os termos</label>
                        <br><br>
                        <i>Os critérios de avaliação para realização das análises grafotécnicas nessa pesquisa são
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
