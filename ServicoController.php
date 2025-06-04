<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getservicos(){

        $servico = Servico::all();

    return response()->json($servico);

    }

    public function createServico(Request $request) {

        $retorno = Servico::create([

        "nome_servico"=>$request->nome_servico,
        "valor"=>$request->valor,
           
        ]);

        return response()->json($retorno);
}
}


// localhost/Dentinho%20feliz/agendamentos/createServico?nome_servico=limpeza&valor=90