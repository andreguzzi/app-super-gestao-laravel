<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index() {
        return view('site.login', ['titulo'=>'Login']);
    }

    public function autenticar(Request $request) {

        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        //se não passar pelo validate
        $request->validate($regras, $feedback);

        //recuperamos os parãmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuario:$email | Senha: $password";
        echo '<br>';

        //iniciar o Model User
        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if(isset($usuario->name)) {
            echo 'Usuario Existe';
        } else {
            echo 'Usuario não existe';
        }

    }
}
