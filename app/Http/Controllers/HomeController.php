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

        /*if: caso nao tenha nenhuma assinatura vinculado ao user e a quant de votos == 0,
         é preciso vincular as imagens ao usuario, caso contrario vai direto para o final,
         pois o usuario ja terminou todas as assinaturas ou preferiu nao votas mais*/
        if(count(ComputeListOfUser::where('user_id', '=', $user_id)->get()) == 0 && $qtd_votes == 0){
            $images = NameImages::orderBy('quant_votes','asc')->where('quant_votes', '>', 0)->take(10)->get();

            foreach($images as $k) {
                ComputeListOfUser::create(['user_id' => $user_id, 'last_file' => $k->name, 'last_result' => $k->result]);
            }
        }
        /*if(count(ComputeListOfUser::where('user_id', '=', $user_id)->get()) == 0){
            if($qtd_votes == 0){
                $images = NameImages::orderBy('quant_votes','asc')->where('quant_votes', '>', 0)->take(10)->get();

                foreach($images as $k) {
                    ComputeListOfUser::create(['user_id' => $user_id, 'last_file' => $k->name, 'last_result' => $k->result]);
                }
            } else {
                return redirect('final');
            }
        }*/

        $last_file_item = ComputeListOfUser::where('user_id', '=', $user_id)->first();
        $file_test_atual = $last_file_item->last_file;
        $file_test_atual_dupla = 'assets/images/(1)'.$file_test_atual;
        $file_test_atual = 'assets/images/'.$file_test_atual;
        $nome_foto = $last_file_item->last_file;
        $id_foto = $last_file_item->id;

        $tempo_inicio = date('H:i:s');
        
        return view('home', compact('file_test_atual', 'file_test_atual_dupla','nome_foto','id_foto', 'tempo_inicio'));
    }

    public function finalizar_votacao()
    {
        $user_id = auth()->user()->id;
        ComputeListOfUser::where('user_id', '=', $user_id)->delete();

        return view('final');
    }

    public function welcome()
    {
        $user_id = auth()->user()->id;
        $qtd_votes = auth()->user()->qtd_votes;

        if(count(ComputeListOfUser::where('user_id', '=', $user_id)->get()) == 0  && $qtd_votes != 0){
            return view('final');
        } else {
            return view('welcome');
        }
    }

    public function post_checkbox(Request $request){
            
        $user_id = auth()->user()->id;
        $qtd_votes = auth()->user()->qtd_votes;
        $nome_foto = $request->nome_foto;
        $id_foto = $request->id_foto;
        $checks = 0;
        $result = 0;
        $criterios = [27];

        $criterios[0] = $request->conexoes != null ? 1 : 0;
        $criterios[1] = $request->andamentoGrafico != null ? 1 : 0;
        $criterios[2] = $request->ataques != null ? 1 : 0;
        $criterios[3] = $request->remates != null ? 1 : 0;
        $criterios[4] = $request->posicionamento != null ? 1 : 0;
        $criterios[5] = $request->alinhamento != null ? 1 : 0;
        $criterios[6] = $request->valoresAngulares != null ? 1 : 0;
        $criterios[7] = $request->valoresCurvilineos != null ? 1 : 0;
        $criterios[8] = $request->alografos != null ? 1 : 0;
        $criterios[9] = $request->metodosConstrucao != null ? 1 : 0;
        $criterios[10] = $request->diacriticosPontuacao != null ? 1 : 0;
        $criterios[11] = $request->inclinacao != null ? 1 : 0;
        $criterios[12] = $request->dinamismoEvolucao != null ? 1 : 0;
        $criterios[13] = $request->pressao != null ? 1 : 0;
        $criterios[14] = $request->ritmoGrafico != null ? 1 : 0;
        $criterios[15] = $request->comportamentoPauta != null ? 1 : 0;
        $criterios[16] = $request->comportamentoBase != null ? 1 : 0;
        $criterios[17] = $request->grauHabilidade != null ? 1 : 0;
        $criterios[18] = $request->tendenciaPunho != null ? 1 : 0;
        $criterios[19] = $request->momentoGrafico != null ? 1 : 0;
        $criterios[20] = $request->variabilidade != null ? 1 : 0;
        $criterios[21] = $request->velocidade != null ? 1 : 0;
        $criterios[22] = $request->espacamentos != null ? 1 : 0;
        $criterios[23] = $request->linhasVerbais != null ? 1 : 0;
        $criterios[24] = $request->calibre != null ? 1 : 0;
        $criterios[25] = $request->morfologia != null ? 1 : 0;
        $criterios[26] = $request->natureza != null ? 1 : 0;

        foreach($criterios as $i){
            $checks += $i == 1 ? 1 : 0;
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
        
        //atualizando numero de votos do usuario
        $votes_update = $qtd_votes + 1;
        User::where('id', $user_id)->update(['qtd_votes' => $votes_update]);
        
        //se não tiver a variavel mensagem dá erro.....
        //if: caso o usuario não tenha escolhido 5 criterios
        //elseif: caso o usuario não tenha selecionado sim ou não
        $mensagem = '';
        if($checks < 5){
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

        //calculando tempo do voto (apenas os minutos)
        $tempo_voto = gmdate('i', abs(strtotime(date('H:i:s')) - strtotime($request->tempo_inicio)));

        //procurando o id do checkbox para fazer o update das informacoes
        CheckBoxTable::create([
            'user_id' => $user_id,
            'image_name' => $nome_foto,
            'image_real' => $image_real,
            'image_fake' => $image_fake,
            'result' => $result,
            'tempo_voto' => $tempo_voto,
            'conexoes' => $criterios[0],
            'andamentoGrafico' => $criterios[1],
            'ataques' => $criterios[2],
            'remates' => $criterios[3],
            'posicionamento' => $criterios[4],
            'alinhamento' => $criterios[5],
            'valoresAngulares' => $criterios[6],
            'valoresCurvilineos' => $criterios[7],
            'alografos' => $criterios[8],
            'metodosConstrucao' => $criterios[9],
            'diacriticosPontuacao' => $criterios[10],
            'inclinacao' => $criterios[11],
            'dinamismoEvolucao' => $criterios[12],
            'pressao' => $criterios[13],
            'ritmoGrafico' => $criterios[14],
            'comportamentoPauta' => $criterios[15],
            'comportamentoBase' => $criterios[16],
            'grauHabilidade' => $criterios[17],
            'tendenciaPunho' => $criterios[18],
            'momentoGrafico' => $criterios[19],
            'variabilidade' => $criterios[20],
            'velocidade' => $criterios[21],
            'espacamentos' => $criterios[22],
            'linhasVerbais' => $criterios[23],
            'calibre' => $criterios[24],
            'morfologia' => $criterios[25],
            'natureza' => $criterios[26]
        ]);

        //deletando imagem vinculada ao user
        ComputeListOfUser::where('id', '=', $id_foto)->delete();

        if($votes_update < 10){
            return redirect('newvote');
        }else{
            return redirect('home');
        }
    }
}