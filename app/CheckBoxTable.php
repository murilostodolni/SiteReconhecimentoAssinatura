<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckBoxTable extends Model
{
    

    protected $fillable =  ['user_id', 'image_name', 'mesmo_punho', 'result', 'tempo_voto','andamentoGrafico','conexoes',
    'ataques', 'remates', 'posicionamento', 'alinhamento', 'valoresAngulares',
    'valoresCurvilineos', 'alografos', 'metodosConstrucao', 'diacriticosPontuacao',
    'inclinacao', 'dinamismoEvolucao', 'pressao', 'ritmoGrafico', 'comportamentoPauta',
    'comportamentoBase', 'grauHabilidade', 'tendenciaPunho', 'momentoGrafico', 'variabilidade',
    'velocidade', 'espacamentos', 'linhasVerbais', 'calibre', 'morfologia', 'natureza'];
    protected $table = 'checkbox';
}
