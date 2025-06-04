<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getgrupo(){

        $grupos = Grupo::all();


       

    return response()->json($grupos);
}

    public function createGrupos(Request $request) {

        $retorno = Grupo::create([
            "nome_grupo" => $request->nome_grupo,
        
        ]);

        return response()->json($retorno);
        
    }
}

//localhost/Dentinho%20feliz/agendamentos/createGrupos?nome_grupo=dentinho