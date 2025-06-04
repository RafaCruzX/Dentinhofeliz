<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getusuarios(){

            $usuarios = User::all();

        return response()->json($usuarios);
    }

    public function createUser(Request $request) {

        $retorno = User::create([
            "nome" => $request->primeiro_nome,
            "email" => $request->email_do_usuario,
            "data_nascimento"=> $request->data_de_nascimento,
            "id_grupo"=> $request->id_grupo
        ]);

        return response()->json($retorno);
        
    }

    public function deletarUser (Request $request )
    {
        $usuarios = User::find($request->id_usuario)->delete();
    

    }

    // public function atualizarUser (Request $request )

    // {
    //     $usuarios = User::find($request->id_usuario)->update(['nome' => $request->nome]);

    // }

    public function atualizarUser (Request $request ){
        $usuario = User::find($request->id_usuario)
        ->update([
            'email' => $request->email_do_usuario,
            'nome' => $request->primeiro_nome,
            
        ]);

        $usuarios = User::orderBy('id_usuario', 'desc')->get();
        return response()->json([$usuario,$usuarios]);
    }
    
 


}


// localhost/Dentinho%20feliz/agendamentos/createUser?primeiro_nome=Rafaela&email_do_usuario=rafaela@mail.com&data_de_nascimento=2008-05-25&id_grupo=3