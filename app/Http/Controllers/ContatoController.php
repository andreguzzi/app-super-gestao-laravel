<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        $motivo_contatos = MotivoContato::all();
        //dd($request);
        //enviar o formulario para o banco
        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        //print_r($contato->getAttributes());
        $contato->save();
        */

        //$contato = new SiteContato();
        //$contato->create($request->all());
        /// $contato->save();
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //realizar a validação dos dados do formulário recebidos no request
        $regras = [
                'nome' => 'required|min:3|max:40|unique:site_contatos',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000'

            ];

            $feedback = [

                'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no maximo 40 caracteres',
                'nome.unique' => 'O nome informado já está em uso',

                'email.email' => 'O email informado não é válido',
                'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres ',
                'required' => 'O campo :attribute deve ser preenchido'
            ];

            $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
