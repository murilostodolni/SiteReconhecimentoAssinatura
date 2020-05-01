<?php

namespace App\Http\Controllers\Auth;

use App\NameImages;
use App\ComputeListOfUser;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'informacao';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|min:6|confirmed',
            'uf' => 'required',
            'atuacao' => 'required|max:30|regex:/[A-Z][A-Z]((\/[A-Z][A-Z]))*$/',
            'idade' => 'numeric|required|between:1,99',
            'sexo' => 'required',
            'escolaridade' => 'required',
            'disciplina' => 'required',
            'abordagem' => 'required',
            'formacao' => 'required|max:50',
            'area' => 'required',
            'tempo' => 'required',
            'setor' => 'required',
            'experiencia' => 'required'            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //cria a lista de imagens uma unica vez!
        $id = 1;
        $info = NameImages::where('id', '=', $id)->get();
        $quant_votes = 5;
        
        if(count($info) < 1){
            foreach(file('assets/files/name_images.txt') as $line) {
                list($foto, $result) = explode(":", $line);
                NameImages::create([
                    'name' => $foto,
                    'quant_votes' => $quant_votes,
                    'result' => $result,
                ]);
            }
        }

        //aviso sobre violacao de senha parou depois disso...
        $password = bcrypt($data['password']);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $password,
            'qtd_votes' => 0,
            'qtd_acertos' => 0,
            'qtd_erros' => 0,
            'uf' => $data['uf'],
            'atuacao' => $data['atuacao'],
            'idade' => $data['idade'],
            'sexo' => $data['sexo'],
            'escolaridade' => $data['escolaridade'],
            'disciplina' => $data['disciplina'],
            'abordagem' => $data['abordagem'],
            'formacao' => $data['formacao'],
            'area' => $data['area'],
            'tempo' => $data['tempo'],
            'setor' => $data['setor'],
            'experiencia' => $data['experiencia'],
        ]);
    }
}
