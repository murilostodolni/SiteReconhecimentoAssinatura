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
                        Para contribuir com essa pesquisa você deverá realizar uma análise pericial
                        a partir das imagens de assinaturas exibidas na tela. Para isso você deverá utilizar os critérios
                        de análise grafotécnica de acordo com as informações contidas na página que será exibida após o
                        registro ou login. Nesta mesma página você irá informar se o par de assinaturas exibidas foram
                        produzidas a partir do mesmo punho escritor, marcando as opções SIM (se a resposta for do mesmo
                        punho escritor) ou NÃO (se a resposta for de punho escritor diferente). Logo em seguida você
                        selecionará na lista de critérios quais foram os critérios que você utilizou para sua análise
                        (deverá ser selecionado no mínimo 5) e clicar no botão "Enviar resposta".
                        <br><br>
                        <strong>Usuário via smartphone:</strong> Clique nos <img src="assets/images/pontos.png"/>
                        para Entrar ou Registrar.
                        <br><br>
                        <strong>Usuário via computador:</strong> Clique em Entrar ou Registrar na parte superior.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection