@extends('layouts.app')



@section('content')

<script language="javascript">
    function habilitacao(){
        if(document.getElementById('concordo').checked == true){
            window.location.href = "{{url('/home')}}";
        } else {
            document.getElementById('click').style.display = "block";
            document.getElementById('click').innerHTML = "<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>&ensp;Aceite os termos para iniciar a análise.";
        }
    }
    function check(){
        if(document.getElementById('concordo').checked == true){
            document.getElementById('click').style.display = "none";
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
                        <a class="btn btn-warning" href="{{url('/termo')}}" role="button">
                        <i class="glyphicon glyphicon-info-sign"></i>&ensp;Termos de Consentimento e Confidencialidade</a>
                       
                        <br><br>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="concordo" onClick="check()">
                            <label class="form-check-label" for="concordo">Concordo com os termos</label>
                        </div>
                        <br>
                        <i>Os critérios de avaliação para realização das análises grafotécnicas nessa pesquisa são
                        baseados nas literaturas de:<br>
                        [FALAT, 2012]<br>
                        [SILVA E FEUERHARMEL, 2013]<br>
                        [MENDES, 2015]</i>
                        <br><br>
                        <a class="btn btn-primary" role="button" id='botao' onClick="habilitacao()">
                        <i class="glyphicon glyphicon-share-alt"></i>&ensp;Iniciar Análises</a>
                        <br><br>
                        <div class="alert alert-danger" role="alert" id="click" style='display: none;'>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
