<?php

namespace App\Http\Controllers;

use App\User;
use App\Lastfilefromuser;
use App\ComputeListOfUser;
use App\VoteTable;
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
        
        $value_of_data = [];
        $i = 0;
        $user_id = auth()->user()->id;
        $associated_file = auth()->user()->associated_file;
        $qtd_votes = auth()->user()->qtd_votes;
        $reloaded_flag = auth()->user()->reloaded_flag;

        $pic_of_users = ComputeListOfUser::where('user_id', '=', $user_id)->get();
        //$last_file_item = ComputeListOfUser::where('user_id', '=', $user_id)->get();
        $last_file_item = DB::table('computelistofuser')->inRandomOrder()->where('user_id', '=', $user_id)->first();

        
        if(count($pic_of_users) == 0 && $qtd_votes == 0){

            $file_test_atual_dupla = "";
            $file_test_atual = "";
            $nome_foto="";
            $id_foto= "";
            
            foreach(file($associated_file) as $line) {
                $value_of_data[$i] = $line;
                ComputeListOfUser::create([
                    'user_id' => $user_id,
                    'last_file' => $line
                ]);

                $i = $i + 1;
            }

        }else{

            if ($last_file_item){
                $file_test_atual = $last_file_item->last_file;
                $file_test_atual_dupla = '(1)'.$file_test_atual;
                $file_test_atual_dupla = 'assets/images/'.$file_test_atual_dupla;
                $file_test_atual = 'assets/images/'.$file_test_atual;
                $nome_foto = $last_file_item->last_file;
                $id_foto = $last_file_item->id;

                

            }else{
                $file_test_atual = "";
                $file_test_atual_dupla = "";
                $nome_foto="";
                $id_foto= "";
            }

        }
    
        $mensagem = '';
        

        $has_images = ComputeListOfUser::where('user_id', '=', $user_id)->get();
        $im_restantes = count($has_images);
        $mensagem_foto = '';
        if ($im_restantes == 0){
            $mensagem_foto = "Você já terminou de votar, obrigado!\nRealize outra avaliação";
        }

        $reload = '';
        if ($reloaded_flag  == 0){
            $reload = 0;
        }

        return view('home', compact('file_test_atual', 'file_test_atual_dupla','nome_foto','id_foto','mensagem', 'im_restantes', 'mensagem_foto', 'reload'));
    }

    public function vote_intermediate(){
        return redirect('home');
    }

    public function reload(){
        $user_id = auth()->user()->id;
        User::where('id', $user_id)->update(['reloaded_flag' => 1]);

        return redirect('home');
    }

    public function post_checkbox(Request $request){
        
        $user_id = auth()->user()->id;
        $qtd_votes = auth()->user()->qtd_votes;

        $nome_foto = $request->nome_foto;
        $id_foto = $request->id_foto;

        $image_real = 1;
        $image_fake = 1;

        $checks = 0;
        $result_image = 1;
        

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
            $valoresAngualares = 0;
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
        

        if ($request->info_image == 'image_real'){
            $image_fake = 0;
        } elseif ($request->info_image == 'image_fake'){
            $image_real = 0;
        }

        $mensagem = '';
        if($checks > 24){
            $mensagem = "Selecione 3 ou mais caracteristicas, obrigado!";
            return view('view_intermediaria', compact('mensagem'));
        }elseif ($image_fake == 1 && $image_real == 1){
            $mensagem = "Selecione uma opcao no resultado final, obrigado!";
            return view('view_intermediaria', compact('mensagem'));
        }

        CheckBoxTable::create([
            'user_id' => $user_id,
            'image_name' => $nome_foto,
            'image_real' => $image_real,
            'image_fake' => $image_fake,
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

        return redirect('home');

    }

}
