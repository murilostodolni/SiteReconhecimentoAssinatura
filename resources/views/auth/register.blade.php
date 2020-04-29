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
                                <select id="uf" name="uf">
                                    <option></option>
                                    <option value="AC" <?php if(!$errors->has('uf') && old('uf') ==  "AC") {echo "selected";} ?>>AC</option>
                                    <option value="AL" <?php if(!$errors->has('uf') && old('uf') ==  "AL") {echo "selected";} ?>>AL</option>
                                    <option value="AP" <?php if(!$errors->has('uf') && old('uf') ==  "AP") {echo "selected";} ?>>AP</option>
                                    <option value="AM" <?php if(!$errors->has('uf') && old('uf') ==  "AM") {echo "selected";} ?>>AM</option>
                                    <option value="BA" <?php if(!$errors->has('uf') && old('uf') ==  "BA") {echo "selected";} ?>>BA</option>
                                    <option value="CE" <?php if(!$errors->has('uf') && old('uf') ==  "CE") {echo "selected";} ?>>CE</option>
                                    <option value="DF" <?php if(!$errors->has('uf') && old('uf') ==  "DF") {echo "selected";} ?>>DF</option>
                                    <option value="ES" <?php if(!$errors->has('uf') && old('uf') ==  "ES") {echo "selected";} ?>>ES</option>
                                    <option value="GO" <?php if(!$errors->has('uf') && old('uf') ==  "GO") {echo "selected";} ?>>GO</option>
                                    <option value="MA" <?php if(!$errors->has('uf') && old('uf') ==  "MA") {echo "selected";} ?>>MA</option>
                                    <option value="MT" <?php if(!$errors->has('uf') && old('uf') ==  "MT") {echo "selected";} ?>>MT</option>
                                    <option value="MS" <?php if(!$errors->has('uf') && old('uf') ==  "MS") {echo "selected";} ?>>MS</option>
                                    <option value="MG" <?php if(!$errors->has('uf') && old('uf') ==  "MG") {echo "selected";} ?>>MG</option>
                                    <option value="PA" <?php if(!$errors->has('uf') && old('uf') ==  "PA") {echo "selected";} ?>>PA</option>
                                    <option value="PB" <?php if(!$errors->has('uf') && old('uf') ==  "PB") {echo "selected";} ?>>PB</option>
                                    <option value="PR" <?php if(!$errors->has('uf') && old('uf') ==  "PR") {echo "selected";} ?>>PR</option>
                                    <option value="PE" <?php if(!$errors->has('uf') && old('uf') ==  "PE") {echo "selected";} ?>>PE</option>
                                    <option value="PI" <?php if(!$errors->has('uf') && old('uf') ==  "PI") {echo "selected";} ?>>PI</option>
                                    <option value="RJ" <?php if(!$errors->has('uf') && old('uf') ==  "RJ") {echo "selected";} ?>>RJ</option>
                                    <option value="RN" <?php if(!$errors->has('uf') && old('uf') ==  "RN") {echo "selected";} ?>>RN</option>
                                    <option value="RS" <?php if(!$errors->has('uf') && old('uf') ==  "RS") {echo "selected";} ?>>RS</option>
                                    <option value="RO" <?php if(!$errors->has('uf') && old('uf') ==  "RO") {echo "selected";} ?>>RO</option>
                                    <option value="RR" <?php if(!$errors->has('uf') && old('uf') ==  "RR") {echo "selected";} ?>>RR</option>
                                    <option value="SC" <?php if(!$errors->has('uf') && old('uf') ==  "SC") {echo "selected";} ?>>SC</option>
                                    <option value="SP" <?php if(!$errors->has('uf') && old('uf') ==  "SP") {echo "selected";} ?>>SP</option>
                                    <option value="SE" <?php if(!$errors->has('uf') && old('uf') ==  "SE") {echo "selected";} ?>>SE</option>
                                    <option value="TO" <?php if(!$errors->has('uf') && old('uf') ==  "TO") {echo "selected";} ?>>TO</option>
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
                                <input type="radio" id="nao_atuacao" name="atuacao" checked onClick="habilitacao()" value="nao">
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
                                <input type="radio" name="sexo" value="f" <?php if(!$errors->has('sexo') && old('sexo') ==  "f") {echo "checked";} ?>>
                                <label for="male">Feminino</label>&emsp;&emsp;
                                <input type="radio" name="sexo" value="m" <?php if(!$errors->has('sexo') && old('sexo') ==  "m") {echo "checked";} ?>>
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
                                <input type="radio" name="escolaridade" value="1" <?php if(!$errors->has('escolaridade') && old('escolaridade') ==  "1") {echo "checked";} ?>> 
                                <label for="male">Graduação</label>&emsp;&emsp;
                                <input type="radio" name="escolaridade" value="2" <?php if(!$errors->has('escolaridade') && old('escolaridade') ==  "2") {echo "checked";} ?>>
                                <label for="female">Especialização</label><br>
                                <input type="radio" name="escolaridade" value="3" <?php if(!$errors->has('escolaridade') && old('escolaridade') ==  "3") {echo "checked";} ?>>
                                <label for="male">Mestrado</label>&emsp;&emsp;&ensp;
                                <input type="radio" name="escolaridade" value="4" <?php if(!$errors->has('escolaridade') && old('escolaridade') ==  "4") {echo "checked";} ?>>
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
                                <input type="radio" name="disciplina" value="1" <?php if(!$errors->has('disciplina') && old('disciplina') ==  "1") {echo "checked";} ?>>
                                <label for="male">Sim</label>&emsp;&emsp;
                                <input type="radio" name="disciplina" value="0" <?php if(!$errors->has('disciplina') && old('disciplina') ==  "0") {echo "checked";} ?>>
                                <label for="female">Não</label>

                                @if ($errors->has('disciplina'))
                                    <span class="help-block">
                                        <br><br>
                                        <strong>{{ $errors->first('disciplina') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('abordagem') ? ' has-error' : '' }}">
                            <label for="abordagem" class="col-md-4 control-label">Acha importante essa abordagem
                            durante a graduação?</label>

                            <div class="col-md-6">
                                <input type="radio" name="abordagem" value="1" <?php if(!$errors->has('abordagem') && old('abordagem') ==  "1") {echo "checked";} ?>>
                                <label for="male">Sim</label>&emsp;&emsp;
                                <input type="radio" name="abordagem" value="0" <?php if(!$errors->has('abordagem') && old('abordagem') ==  "0") {echo "checked";} ?>>
                                <label for="female">Não</label>

                                @if ($errors->has('abordagem'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('abordagem') }}</strong>
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
                                <input type="radio" name="area" value="1" <?php if(!$errors->has('area') && old('area') ==  "1") {echo "checked";} ?>>
                                <label for="male">Perícia Grafotécnica</label><br>
                                <input type="radio" name="area" value="2" <?php if(!$errors->has('area') && old('area') ==  "2") {echo "checked";} ?>>
                                <label for="female">Documentoscopia</label><br>
                                <input type="radio" name="area" value="3" <?php if(!$errors->has('area') && old('area') ==  "3") {echo "checked";} ?>>
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
                                <input type="radio" name="tempo" value="1" <?php if(!$errors->has('tempo') && old('tempo') ==  "1") {echo "checked";} ?>>
                                <label for="male">Menos de 3 anos</label>&emsp;&emsp;
                                <input type="radio" name="tempo" value="2" <?php if(!$errors->has('tempo') && old('tempo') ==  "2") {echo "checked";} ?>>
                                <label for="female">Entre 4 e 5 anos</label><br>
                                <input type="radio" name="tempo" value="3" <?php if(!$errors->has('tempo') && old('tempo') ==  "3") {echo "checked";} ?>>
                                <label for="female">Entre 6 e 10 anos</label>&emsp;&emsp;
                                <input type="radio" name="tempo" value="4" <?php if(!$errors->has('tempo') && old('tempo') ==  "4") {echo "checked";} ?>>
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
                                <input type="radio" name="setor" value="1" <?php if(!$errors->has('setor') && old('setor') ==  "1") {echo "checked";} ?>>
                                <label for="male">Perito oficial</label>&emsp;&emsp;
                                <input type="radio" name="setor" value="2" <?php if(!$errors->has('setor') && old('setor') ==  "2") {echo "checked";} ?>>
                                <label for="female">Perito extra oficial</label><br>
                                <input type="radio" name="setor" value="3" <?php if(!$errors->has('setor') && old('setor') ==  "3") {echo "checked";} ?>>
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
                                <input type="radio" name="experiencia" value="1" <?php if(!$errors->has('experiencia') && old('experiencia') ==  "1") {echo "checked";} ?>>
                                <label for="male">Serviço público</label>&emsp;&emsp;
                                <input type="radio" name="experiencia" value="2" <?php if(!$errors->has('experiencia') && old('experiencia') ==  "2") {echo "checked";} ?>>
                                <label for="female">Serviço privado</label><br>
                                <input type="radio" name="experiencia" value="3" <?php if(!$errors->has('experiencia') && old('experiencia') ==  "3") {echo "checked";} ?>>
                                <label for="female">Serviço público e privado</label>

                                @if ($errors->has('experiencia'))
                                    <span class="help-block">
                                        <strong><{{ $errors->first('experiencia') }}</strong>
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
