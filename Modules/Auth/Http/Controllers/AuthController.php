<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mockery\Exception;

class AuthController extends Controller
{
    private $sentinel;

    public function __construct()
    {
        $this->sentinel = app()->make('sentinel');
    }

    public function index()
    {
        return view('auth::index');
    }

    public function register()
    {
        return view('auth::register');

    }

    public function login(Request $request)
    {
        try {

            $credentials = [
                'email' => $request['email'],
                'password' => $request['password']
            ];

            if($this->sentinel->authenticate($credentials, true)):
                return redirect()->intended('admin');
            endif;

        } catch(Exception $e) {
            $e->getMessage();
        }
    }

    public function createNewUser(Request $request)
    {
        try {

            $credentials = [
                'email' => $request['email'],
                'password' => $request['password']
            ];

            if($this->sentinel->registerAndActivate($credentials)):
                return redirect()->intended('auth');
            endif;

        } catch(Exception $e) {
            $e->getMessage();
        }
    }

    public function logout()
    {
        $this->sentinel->logout();

        return redirect()->route('auth.index');
    }

}
