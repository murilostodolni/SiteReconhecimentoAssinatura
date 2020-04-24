@extends('layouts.app')



@section('content')

<script language="javascript">
    function habilitacao(){
      if(document.getElementById('concordo').checked == true){
        document.getElementById('botao').disabled = false;
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
                        <button><a href="{{url('/termo')}}">Termos de consentimento e confidencialidade</a></button>
                        <br><br>
                        <input type="checkbox" id="concordo" value="concordo" onClick="habilitacao()" value="concordo">
                        <label for="male">Concordo com os termos</label>&emsp;&emsp;
                        <br>
                        <br>
                        <a href="{{url('/home')}}"><button type="button" id='botao' disabled>Clique para iniciar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
