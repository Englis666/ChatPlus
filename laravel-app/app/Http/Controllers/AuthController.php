<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Infrastructure\Persistence\User\EloquentUserRepsository;
use App\Application\User\UseCase\LoginService;
use App\Application\User\UseCase\RegisterService;


class AuthController extends Controller{

    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');
        $userRepo = new EloquentUserRepsository();
        $loginService = new LoginService($userRepo);

        if ($loginService->login($credentials['email'], $credentials['password'])) {
           $user = $userRepo->findByEmail($credentials['email']);
            Auth::LoginUsingId($user->$idUser);
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['login' => 'Credenciales incorrectas.']);
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $data = $request->only('name', 'email', 'password');
        $userRepo = new EloquentUserRepsository();
        $registerService = new RegisterService($userRepo);
        $user = $registerService->register($data['name'], $data['email'], $data['password']);
        if ($user) {
            Auth::LoginUsingId($user->idUser);
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['register' => 'Error al registrar el usuario.']); 
    }





}