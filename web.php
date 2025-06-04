<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AgendaController;



Route::get('usuarios', [UserController::class, 'getusuarios']);
Route::get('servicos', [ServicoController::class, 'getservicos']);
Route::get('agendamento', [AgendamentoController::class, 'getagendamento']);
Route::get('grupos', [GrupoController::class, 'getgrupo']);
Route::get('agenda', [AgendaController::class, 'getagenda']);

Route::get('createUser', [UserController::class, 'createUser']);
Route::get('createServico', [ServicoController::class, 'createServico']);
Route::get('createAgendamento', [AgendamentoController::class, 'createAgendamento']);
Route::get('createAgenda', [AgendaController::class, 'createAgenda']);
Route::get('createGrupos', [GrupoController::class, 'createGrupos']);
