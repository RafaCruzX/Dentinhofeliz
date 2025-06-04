<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Agendamento;
use Illuminate\Http\Request;


class AgendamentoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getagendamento(){


        $agendamento= Agendamento::all();

        
    return response()->json($agendamento);
}

    public function createAgendamento(Request $request) {

        $retorno = agendamento::create([
            "id_usuario"=>$request->id_usuario,
            "id_servico"=>$request->id_servico,
            "id_agenda"=>$request->id_agenda,
            "data"=>$request->data,
        
        ]);

        return response()->json($retorno);
}
}

//localhost/Dentinho%20feliz/agendamentos/createAgendamento?id_usuario=0&id_servico=0&id_agenda=0&horas=08:05&data=2024/03/06