<?php

namespace App\Http\Controllers;

use App\User;
use App\ComputeListOfUser;
use App\NameImages;
use App\CheckBoxTable;
use App\Http\Requests;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user_id = auth()->user()->id;
        $qtd_votes = auth()->user()->qtd_votes;

        $max_votes = 10;
        
        $pic_of_users = ComputeListOfUser::where('user_id', '=', $user_id)->get();

        //caso não tenha mais nenhuma foto para o usuario, vai direto para a pag. final
        if(count($pic_of_users) == 0 && $qtd_votes == $max_votes){
            return redirect('final');

        }elseif(count($pic_of_users) == 0 && $qtd_votes == 0){

            $images = NameImages::orderBy('quant_votes','asc')->where('quant_votes', '>', 0)->take(10)->get();

            foreach($images as $k) {
                ComputeListOfUser::create([
                    'user_id' => $user_id,
                    'last_file' => $k->name,
                    'last_result' => $k->result,
                ]);
            }
        }

        $last_file_item = ComputeListOfUser::where('user_id', '=', $user_id)->first();

        //TODO NÃO PRECISA if ($last_file_item){
        $file_test_atual = $last_file_item->last_file;
        $file_test_atual_dupla = '(1)'.$file_test_atual;
        $file_test_atual_dupla = 'assets/images/'.$file_test_atual_dupla;
        $file_test_atual = 'assets/images/'.$file_test_atual;
        $nome_foto = $last_file_item->last_file;
        $id_foto = $last_file_item->id;

        $exist_info = CheckBoxTable::where('user_id', '=', $user_id)->where('image_name', '=', $nome_foto)->get();

        if(count($exist_info) < 1){
            //criando tabela com as informacoes do voto do user
            CheckBoxTable::create([
                'user_id' => $user_id,
                'image_name' => $nome_foto,
                'image_real' => 0,
                'image_fake' => 0,
                'result' => 0,
                'andamentoGrafico' => 0,
                'conexoes' => 0,
                'ataques' => 0,
                'remates' => 0,
                'posicionamento' => 0,
                'alinhamento' => 0,
                'valoresAngulares' => 0,
                'valoresCurvilineos' => 0,
                'alografos' => 0,
                'metodosConstrucao' => 0,
                'diacriticosPontuacao' => 0,
                'inclinacao' => 0,
                'dinamismoEvolucao' => 0,
                'pressao' => 0,
                'ritmoGrafico' => 0,
                'comportamentoPauta' => 0,
                'comportamentoBase' => 0,
                'grauHabilidade' => 0,
                'tendenciaPunho' => 0,
                'momentoGrafico' => 0,
                'variabilidade' => 0,
                'velocidade' => 0,
                'espacamentos' => 0,
                'linhasVerbais' => 0,
                'calibre' => 0,
                'morfologia' => 0,
                'natureza' => 0
            ]);
        }
        
        return view('home', compact('file_test_atual', 'file_test_atual_dupla','nome_foto','id_foto'));
    }

    //TODO ver para tirar
    public function vote_intermediate(){
        return redirect('home');
    }

    //TODO ver para tirar
    public function newvote(){
        return redirect('newvote');
    }

    //TODO ver para tirar
    /*public function reload(){
        $user_id = auth()->user()->id;
        User::where('id', $user_id)->update(['reloaded_flag' => 1]);

        return redirect('home');
    }*/

    public function post_checkbox(Request $request){
            
        $user_id = auth()->user()->id;
        $qtd_votes = auth()->user()->qtd_votes;

        $nome_foto = $request->nome_foto;
        $id_foto = $request->id_foto;

        $checks = 0;
        $result = 0;
        
        $conexoes = 1;
        $andamentoGrafico = 1;
        $ataques = 1;
        $remates = 1;
        $posicionamento = 1;
        $alinhamento = 1;
        $valoresAngulares = 1;
        $valoresCurvilineos = 1;
        $alografos = 1;
        $metodosConstrucao = 1;
        $diacriticosPontuacao = 1;
        $inclinacao = 1;
        $dinamismoEvolucao = 1;
        $pressao = 1;
        $ritmoGrafico = 1;
        $comportamentoPauta = 1;
        $comportamentoBase = 1;
        $grauHabilidade = 1;
        $tendenciaPunho = 1;
        $momentoGrafico = 1;
        $variabilidade = 1;
        $velocidade = 1;
        $espacamentos = 1;
        $linhasVerbais = 1;
        $calibre = 1;
        $morfologia = 1;
        $natureza = 1;
                

        if ($request->conexoes == null){
            $conexoes = 0;
            $checks = $checks + 1;
        }
        if ($request->andamentoGrafico == null){
            $andamentoGrafico = 0;
            $checks = $checks + 1;
        }
        if ($request->ataques == null){
            $ataques = 0;
            $checks = $checks + 1;
        }
        if ($request->remates == null){
            $remates = 0;
            $checks = $checks + 1;
        }
        if ($request->posicionamento == null){
            $posicionamento = 0;
            $checks = $checks + 1;
        }

        if ($request->alinhamento == null){
            $alinhamento = 0;
            $checks = $checks + 1;
        }
        if ($request->valoresAngulares == null){
            $valoresAngulares = 0;
            $checks = $checks + 1;
        }
        if ($request->valoresCurvilineos == null){
            $valoresCurvilineos = 0;
            $checks = $checks + 1;
        }
        if ($request->alografos == null){
            $alografos = 0;
            $checks = $checks + 1;
        }
        if ($request->metodosConstrucao == null){
            $metodosConstrucao = 0;
            $checks = $checks + 1;
        }

        if ($request->diacriticosPontuacao == null){
            $diacriticosPontuacao = 0;
            $checks = $checks + 1;
        }
        if ($request->inclinacao == null){
            $inclinacao = 0;
            $checks = $checks + 1;
        }
        if ($request->dinamismoEvolucao == null){
            $dinamismoEvolucao = 0;
            $checks = $checks + 1;
        }
        if ($request->pressao == null){
            $pressao = 0;
            $checks = $checks + 1;
        }
        if ($request->ritmoGrafico == null){
            $ritmoGrafico = 0;
            $checks = $checks + 1;
        }

        if ($request->comportamentoPauta == null){
            $comportamentoPauta = 0;
            $checks = $checks + 1;
        }
        if ($request->comportamentoBase == null){
            $comportamentoBase = 0;
            $checks = $checks + 1;
        }
        if ($request->grauHabilidade == null){
            $grauHabilidade = 0;
            $checks = $checks + 1;
        }
        if ($request->tendenciaPunho == null){
            $tendenciaPunho = 0;
            $checks = $checks + 1;
        }
        if ($request->momentoGrafico == null){
            $momentoGrafico = 0;
            $checks = $checks + 1;
        }
        if ($request->variabilidade == null){
            $variabilidade = 0;
            $checks = $checks + 1;
        }
        if ($request->velocidade == null){
            $velocidade = 0;
            $checks = $checks + 1;
        }
        if ($request->espacamentos == null){
            $espacamentos = 0;
            $checks = $checks + 1;
        }
        if ($request->linhasVerbais == null){
            $linhasVerbais = 0;
            $checks = $checks + 1;
        }
        if ($request->calibre == null){
            $calibre = 0;
            $checks = $checks + 1;
        }
        if ($request->morfologia == null){
            $morfologia = 0;
            $checks = $checks + 1;
        }
        if ($request->natureza == null){
            $natureza = 0;
            $checks = $checks + 1;
        }

        $image_real = 1;
        $image_fake = 1;

        $info_image = $request->info_image;

        if ($info_image == 'image_real'){
            $image_fake = 0;
        } elseif ($info_image == 'image_fake'){
            $image_real = 0;
        }

        //colocando se o user acertou ou errou o voto
        $result_db = ComputeListOfUser::where('id', '=', $id_foto)->value('last_result');
        if(($result_db == 1 && $image_real == 1) || ($result_db == 0 && $image_fake == 1)){
            $result = 1;
        }

        //adicionar ao user a quantidade de acertos e erros
        //como o $result informa ao banco se o usuario acertou ou erro
        //se o result == 1 (usuario acertou) e caso contrario errou
        if($result == 1){
            $qtd_acertos = User::where('id', '=', $user_id)->value('qtd_acertos');
            $qtd_acertos = $qtd_acertos + 1;
            User::where('id', $user_id)->update(['qtd_acertos' => $qtd_acertos]);
        }else{
            $qtd_erros = User::where('id', '=', $user_id)->value('qtd_erros');
            $qtd_erros = $qtd_erros + 1;
            User::where('id', $user_id)->update(['qtd_erros' => $qtd_erros]);
        }
        
        //se não tiver a variavel mensagem dá erro.....
        //if: caso o usuario não tenha escolhido 5 criterios
        //elseif: caso o usuario não tenha selecionado sim ou não
        $mensagem = '';
        if($checks > 22){
            $mensagem = "Selecione 5 ou mais caracteristicas, obrigado!";
            return view('view_intermediaria', compact('mensagem'));
        }elseif ($image_fake == 1 && $image_real == 1){
            $mensagem = "Selecione uma opcao no resultado final, obrigado!";
            return view('view_intermediaria', compact('mensagem'));
        }

        //diminuindo um voto da imagem que foi votada na tabela name_images
        $quant_votes = NameImages::where('name', '=', $nome_foto)->value('quant_votes');
        $quant_votes = $quant_votes - 1;
        NameImages::where('name', '=', $nome_foto)->update(['quant_votes' => $quant_votes]);

        //procurando o id do checkbox para fazer o update das informacoes
        $info = CheckBoxTable::where('user_id', '=', $user_id)->get();
        foreach ($info as $i)
        {
            if($i->image_name == $nome_foto){
                $id_check_box = $i->id;
                break;
            }
        }

        //TODO PODERIA TIRAR OS IFS, POREM IRIA FICAR NULL PARA NÃO MARCADO OU 1 PARA MARCADO, FAÇO???
        CheckBoxTable::where('id', $id_check_box)->update([
            'image_real' => $image_real,
            'image_fake' => $image_fake,
            'result' => $result,
            'andamentoGrafico' => $andamentoGrafico,
            'conexoes' => $conexoes,
            'ataques' => $ataques,
            'remates' => $remates,
            'posicionamento' => $posicionamento,
            'alinhamento' => $alinhamento,
            'valoresAngulares' => $valoresAngulares,
            'valoresCurvilineos' => $valoresCurvilineos,
            'alografos' => $alografos,
            'metodosConstrucao' => $metodosConstrucao,
            'diacriticosPontuacao' => $diacriticosPontuacao,
            'inclinacao' => $inclinacao,
            'dinamismoEvolucao' => $dinamismoEvolucao,
            'pressao' => $pressao,
            'ritmoGrafico' => $ritmoGrafico,
            'comportamentoPauta' => $comportamentoPauta,
            'comportamentoBase' => $comportamentoBase,
            'grauHabilidade' => $grauHabilidade,
            'tendenciaPunho' => $tendenciaPunho,
            'momentoGrafico' => $momentoGrafico,
            'variabilidade' => $variabilidade,
            'velocidade' => $velocidade,
            'espacamentos' => $espacamentos,
            'linhasVerbais' => $linhasVerbais,
            'calibre' => $calibre,
            'morfologia' => $morfologia,
            'natureza' => $natureza
        ]);

        $picture = ComputeListOfUser::find($id_foto);
        $picture->delete();

        $votes_update = $qtd_votes + 1;
        User::where('id', $user_id)->update(['qtd_votes' => $votes_update]);

        //TODO fazer operacao com o tempo!
        /*$time = CheckBoxTable::where('id', $id_check_box)->get();
        $time_created = $time->created_at;
        $time_finished = $time->updated_at;

        $time_total = strtotime($time_finished) - strtotime($time_created);
        $dte = new datetime(date('H:i:s'));
        $dte = $time_total;
        print "Total " . $dte . "<br>";*/


        if($votes_update < 10){
            return redirect('newvote');
        }else{
            return redirect('home');
        }
    }
}
?>