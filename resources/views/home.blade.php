@extends('layouts.app')

@section('content')
<style type="text/css">
    
.textcenter {text-align: center;} 
.image_test {max-width:25%;height:auto;}

.funkyradio div {
  clear: both;
  overflow: hidden;
}

.funkyradio label {
  width: 45%;
  border-radius: 3px;
  border: 1px solid #D1D3D4;
  font-weight: normal;
}

.funkyradio input[type="radio"]:empty,
.funkyradio input[type="checkbox"]:empty {
  display: none;
}

.funkyradio input[type="radio"]:empty ~ label,
.funkyradio input[type="checkbox"]:empty ~ label {
  position: relative;
  line-height: 1.5em;
  text-indent: 3.25em;
  margin-top: 0.5em;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before,
.funkyradio input[type="checkbox"]:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
  color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label,
.funkyradio input[type="checkbox"]:checked ~ label {
  color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before,
.funkyradio input[type="checkbox"]:checked ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #333;
  background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before,
.funkyradio input[type="checkbox"]:focus ~ label:before {
  box-shadow: 0 0 0 3px #999;
}

.funkyradio-primary input[type="radio"]:checked ~ label:before,
.funkyradio-primary input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #337ab7;
}

.funkyradio-success input[type="radio"]:checked ~ label:before,
.funkyradio-success input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before,
.funkyradio-danger input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before,
.funkyradio-warning input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #f0ad4e;
}

.funkyradio-info input[type="radio"]:checked ~ label:before,
.funkyradio-info input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5bc0de;
}
</style>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script  type="text/javascript" src="jquery.js"></script>
<script src="jquery.elevatezoom.js" type="text/javascript"></script>
<script>
$('.eleve-image').elevateZoom({
  zoomType: "inner",
  cursor: "crosshair"
});
</script>

@if (Auth::user()->reloaded_flag == 0)
<script>window.location = "{{url('/reload')}}";</script>
@endif




<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario</div>

                <div class="panel-body textcenter">
                <?php
                      if ($file_test_atual== "" || $file_test_atual_dupla== "" || $nome_foto == ""){
                        echo(' ');
                      }else{
                        ?>
                        Assinatura Genuina ->
                        <img id="zoom_01" src="{{$file_test_atual}}" data-zoom-image="large/image1.jpg" class="eleve-image" />
                        
                        Assinatura para Analise ->
                        <img src="{{$file_test_atual_dupla}}" class="image_test" />
                        <?php
                      }
                    ?>
                </div>
                
                    <?php
                      if ($file_test_atual== "" || $file_test_atual_dupla== "" || $nome_foto == ""){
                        echo(' ');
                      }else{
                        ?>
                          <form method="POST" action="{{url('post_checkbox')}}">
                            {{ csrf_field() }}

                            <h3> Assinatura foi feita com o mesmo punho? </h3>
                            <div class="funkyradio">
                                <div class="funkyradio-success">
                                  <input type="radio" name="info_image" value=image_real id="radio3" />
                                  <label for="radio3">Sim</label>
                                </div>
                                <div class="funkyradio-danger">
                                    <input type="radio" name="info_image" value=image_fake id="radio4" />
                                    <label for="radio4">Não</label>
                                </div>
                            </div>

                            <h3> Caracteristicas Utilizadas </h3>
                            <h5>(selecione 3 ou mais)</h5>

                            <table width=100%>
                              <tr>
                                <!--<td width=40%>-->
                                  <div class="funkyradio">
                                    <div class="funkyradio-primary">
                                        <input type="checkbox" name="conexoes" id="checkbox1">
                                        <label for="checkbox1">Conexoes</label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="checkbox" name="andamentoGrafico" id="checkbox2">
                                        <label for="checkbox2">Andamento Grafico</label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="checkbox" name="ataques" id="checkbox3">
                                        <label for="checkbox3">Ataques</label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="checkbox" name="remates" id="checkbox4">
                                        <label for="checkbox4">Remates</label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="checkbox" name="posicionamento" id="checkbox5">
                                        <label for="checkbox5">Posicionamento</label>
                                    </div>
                                  </div>
                                <!--</td>-->

                                <!--<td width=40%>-->
                                  <div class="funkyradio">
                                      <div class="funkyradio-primary">
                                          <input type="checkbox" name="alinhamento" id="checkbox6">
                                          <label for="checkbox6">Alinhamento</label>
                                      </div>
                                      <div class="funkyradio-primary">
                                          <input type="checkbox" name="valoresAngulares" id="checkbox7">
                                          <label for="checkbox7">Valores Angulares</label>
                                      </div>
                                      <div class="funkyradio-primary">
                                          <input type="checkbox" name="valoresCurvilineos" id="checkbox8">
                                          <label for="checkbox8">Valores Curvilíneos</label>
                                      </div>
                                      <div class="funkyradio-primary">
                                          <input type="checkbox" name="alografos" id="checkbox9">
                                          <label for="checkbox9">Alógrafos</label>
                                      </div>
                                      <div class="funkyradio-primary">
                                          <input type="checkbox" name="metodosConstrucao" id="checkbox10">
                                          <label for="checkbox10">Método de Construção</label>
                                      </div>
                                    </div>
                                <!--</td>-->
                              
                                <!--<td width=40%>-->
                                  <div class="funkyradio">
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="diacriticosPontuacao" id="checkbox11">
                                            <label for="checkbox11">Diacríticos e Pontuação</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="inclinacao" id="checkbox12">
                                            <label for="checkbox12">Inclinação</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="dinamismoEvolucao" id="checkbox13">
                                            <label for="checkbox13">Dinamismo ou Evolução</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="pressao" id="checkbox14">
                                            <label for="checkbox14">Pressão</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="ritmoGrafico" id="checkbox15">
                                            <label for="checkbox15">Ritmo Gráfico</label>
                                        </div>
                                  </div>
                                <!--</td>-->
                              </tr>
                              <tr>

                                <td width=45%>
                                  <div class="funkyradio">
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="comportamentoPauta" id="checkbox16">
                                            <label for="checkbox16">Comportamento de Pauta</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="comportamentoBase" id="checkbox17">
                                            <label for="checkbox17">Comportamento de Base</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="grauHabilidade" id="checkbox18">
                                            <label for="checkbox18">Grau de Habilidade</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="tendenciaPunho" id="checkbox19">
                                            <label for="checkbox19">Tendência de Punho </label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="momentoGrafico" id="checkbox20">
                                            <label for="checkbox20">Momentos Gráficos</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="variabilidade" id="checkbox21">
                                            <label for="checkbox21">Variabilidade</label>
                                        </div>
                                  </div>
                                </td>
                                </tr>
                              <tr>

                                <td width=45%>
                                  <div class="funkyradio">
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="velocidade" id="checkbox22">
                                            <label for="checkbox22">Velocidade</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="espacamentos" id="checkbox23">
                                            <label for="checkbox23">Espaçamentos</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="linhasVerbais" id="checkbox24">
                                            <label for="checkbox24">Linhas Limitantes Verbais</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="calibre" id="checkbox25">
                                            <label for="checkbox25">Calibre e Proporções</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="morfologia" id="checkbox26">
                                            <label for="checkbox26">Morfologia</label>
                                        </div>
                                        <div class="funkyradio-primary">
                                            <input type="checkbox" name="natureza" id="checkbox27">
                                            <label for="checkbox27">Natureza</label>
                                        </div>
                                  </div>
                                </td>
                            </tr>
                          </table>

                              <input type="hidden" name="nome_foto" value="{{$nome_foto}}">
                              <input type="hidden" name="id_foto" value="{{$id_foto}}">
                              <button>Enviar Resposta</button>
                          </form>
                        <?php
                      }
                    ?>
                  <div class="textcenter">
                    <p>{{$mensagem_foto}}</p>
                    <?php
                      if ($file_test_atual== "" || $file_test_atual_dupla== "" || $nome_foto == ""){?>
                        <a href="https://forms.gle/u45FsmN21yrk7m878"> CLICANDO AQUI</a>
                    <?php
                      }?>
                        
                    
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection