<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //NUEVAS FUNCIONES
    protected function redirectTo(){
        return route('index');
    }

    public function username(){
        return 'email';
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    protected function authenticated(Request $request, $user){
        // QUE HACE LUEGO DE LOGEARSE (LOG)
        Auth::loginUsingId($user->id_usuario);
        return redirect('/');        

    }

    protected function loggedOut(Request $request)
    {
        Auth::logout();
    }

}
