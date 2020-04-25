@extends('layouts.app')

@section('content')
<script language="javascript">
    function habilitacao(){
      if(document.getElementById('sim_atuacao').checked == true){
        document.getElementById('atuacao').disabled = false;
      } else if(document.getElementById('nao_atuacao').checked == true){
        document.getElementById('atuacao').disabled = true;
      }
}
</script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome Completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('uf') ? ' has-error' : '' }}">
                            <label for="uf" class="col-md-4 control-label">Estado (UF onde reside)</label>

                            <div class="col-md-6">
                                <select id="uf" name="uf" value="{{ old('uf') }}">
                                    <option></option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>

                                @if ($errors->has('uf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('atuacao') ? ' has-error' : '' }}">
                            <label for="atuacao" class="col-md-4 control-label">Atua em outro estado diferente do seu?</label>

                            <div class="col-md-6">
                                <input type="radio" id="nao_atuacao" name="atuacao" onClick="habilitacao()" checked>
                                <label for="female">Não</label>&emsp;&emsp;
                                <input type="radio" id="sim_atuacao" name="atuacao" onClick="habilitacao()">
                                <label for="male">Sim</label>

                                <input id="atuacao" type="text" disabled placeholder="Ex: PE/PB/AL..." class="form-control" name="atuacao">

                                @if ($errors->has('atuacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('atuacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('idade') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Idade</label>

                            <div class="col-md-6">
                                <input id="idade" type="text" class="form-control" placeholder="Ex: 35"
                                name="idade" value="{{ old('idade') }}">

                                @if ($errors->has('idade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                            <label for="sexo" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <input type="radio" name="sexo" value="f">
                                <label for="male">Feminino</label>&emsp;&emsp;
                                <input type="radio" name="sexo" value="m">
                                <label for="female">Masculino</label><br>

                                @if ($errors->has('sexo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('escolaridade') ? ' has-error' : '' }}">
                            <label for="escolaridade" class="col-md-4 control-label">Nível Escolaridade (selecione o maior nível)</label>

                            <div class="col-md-6">
                                <input type="radio" name="escolaridade" value="graduacao"> 
                                <label for="male">Graduação</label>&emsp;&emsp;
                                <input type="radio" name="escolaridade" value="pos_especializacao">
                                <label for="female">Pós Graducação</label><br>
                                <input type="radio" name="escolaridade" value="mestrado">
                                <label for="male">Mestrado</label>&emsp;&emsp;&ensp;
                                <input type="radio" name="escolaridade" value="doutorado">
                                <label for="female">Doutorado</label><br>

                                @if ($errors->has('escolaridade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('escolaridade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('disciplina') ? ' has-error' : '' }}">
                            <label for="disciplina" class="col-md-4 control-label">Durante sua titulação estudou alguma
                            disciplina votada para perícia grafotécnica?</label>

                            <div class="col-md-6">
                                <input type="radio" name="disciplina" value="sim">
                                <label for="male">Sim</label>&emsp;&emsp;
                                <input type="radio" name="disciplina" value="nao">
                                <label for="female">Não</label><br>

                                @if ($errors->has('atuacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('atuacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('abordagem') ? ' has-error' : '' }}">
                            <label for="abordagem" class="col-md-4 control-label">Acha importante essa abordagem
                            durante a graduação?</label>

                            <div class="col-md-6">
                                <input type="radio" name="abordagem" value="sim">
                                <label for="male">Sim</label>&emsp;&emsp;
                                <input type="radio" name="abordagem" value="nao">
                                <label for="female">Não</label><br>

                                @if ($errors->has('atuacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('atuacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('formacao') ? ' has-error' : '' }}">
                            <label for="formacao" class="col-md-4 control-label">Qual sua formação acadêmica?</label>

                            <div class="col-md-6">
                                <input id="formacao" type="text" class="form-control" placeholder="Ex: Engenharia da Computação"
                                name="formacao" value="{{ old('formacao') }}">

                                @if ($errors->has('formacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('formacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for="area" class="col-md-4 control-label">Qual sua área de atuação?</label>

                            <div class="col-md-6">
                                <input type="radio" name="area" value="grafotecnica">
                                <label for="male">Perícia Grafotécnica</label><br>
                                <input type="radio" name="area" value="documentoscopia">
                                <label for="female">Documentoscopia</label><br>
                                <input type="radio" name="area" value="ambos">
                                <label for="female">Ambas as áreas de atuação</label><br>

                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tempo') ? ' has-error' : '' }}">
                            <label for="tempo" class="col-md-4 control-label">Qual o tempo de atuação profissional na
                            área de perícia grafotécnica?</label>

                            <div class="col-md-6">
                                <input type="radio" name="tempo" value="1">
                                <label for="male">Menos de 3 anos</label>&emsp;&emsp;
                                <input type="radio" name="tempo" value="2">
                                <label for="female">Entre 4 e 5 anos</label><br>
                                <input type="radio" name="tempo" value="3">
                                <label for="female">Entre 6 e 10 anos</label>&emsp;&emsp;
                                <input type="radio" name="tempo" value="4">
                                <label for="female">Acima de 10 anos</label>

                                @if ($errors->has('tempo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('setor') ? ' has-error' : '' }}">
                            <label for="setor" class="col-md-4 control-label">Qual o setor de atuação?</label>

                            <div class="col-md-6">
                                <input type="radio" name="setor" value="1">
                                <label for="male">Perito oficial</label>&emsp;&emsp;
                                <input type="radio" name="setor" value="2">
                                <label for="female">Perito extra oficial</label><br>
                                <input type="radio" name="setor" value="3">
                                <label for="female">Perito oficial e extra oficial</label>

                                @if ($errors->has('setor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('setor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('experiencia') ? ' has-error' : '' }}">
                            <label for="experiencia" class="col-md-4 control-label">Experiência profissional</label>

                            <div class="col-md-6">
                                <input type="radio" name="experiencia" value="1">
                                <label for="male">Serviço público</label>&emsp;&emsp;
                                <input type="radio" name="experiencia" value="2">
                                <label for="female">Serviço privado</label><br>
                                <input type="radio" name="experiencia" value="3">
                                <label for="female">Serviço público e privado</label>

                                @if ($errors->has('experiencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('experiencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
