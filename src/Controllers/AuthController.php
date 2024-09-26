<?php

namespace app\Controllers;

use App\Models\User;

class AuthController
{
    public function registeForm(){
        view('auth/register');

    }

    public function register(){
        $user = User::where('email', $_POST['email'])
        if(count($user) === 0 )
        dump($_POST);
        $user =new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
    }

    public function loginForm(){
        
    }

    public function login(){
        
    }

    public function logout(){
        
    }

}