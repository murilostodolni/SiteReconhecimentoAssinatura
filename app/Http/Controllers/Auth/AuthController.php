<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Lastfilefromuser;
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
    protected $redirectTo = '/';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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

        #$files = glob($dir . 'assets/files/*.*');
        $max_file = 5;
        $last_file = Lastfilefromuser::orderBy('created_at', 'desc')->first();
        $splitted = explode (".", $last_file['last_file']);  
        $last_file_int = (int)$splitted[0];

        if($last_file_int == $max_file){
            $next_file = 1;
        }else{
            $next_file = $last_file_int + 1;
        }


        Lastfilefromuser::create([
            'last_file' => $next_file
        ]);


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'associated_file' => 'assets/files/'.$next_file.'.txt',
            'password' => bcrypt($data['password']),
            'finished' => FALSE,
            'qtd_votes' => 0,
            'reloaded_flag' => 0
        ]);
    }
}
