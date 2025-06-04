<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getagenda(){


        $agenda = Agenda::all();
    

    return response()->json($agenda);
}

 public function createAgenda(Request $request) {

    $inicio = strtotime($request->horario_inicio);
    $final = strtotime($request->horario_final);
    $intervalo = ($final - $inicio) / 60 /30;
    $retorno = [];
    for ($i=0 $i<$intervalo; $i++){
        echo "\n".date("H:i", $inicio);
        $inicio += 30 * 60
        $retorno = Agenda::create({
            'horario' => date("H:i", $inicio),
            'id_usuario' => $request->id_profissional,
            'dia_da_semana' => $request-> dia_semana,
        });
    }


    return response()->json($retorno);



}



}
//localhost/Dentinho%20feliz/agendamentos/createAgenda?id-usuario=4&dia_da_semana=2008/05/04&horario=05:10