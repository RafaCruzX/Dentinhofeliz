<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;

class Agendamento extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'agendamento';
 
    protected $primaryKey = 'id_agendamento';

    public $timestamps = false;


    protected $fillable = [
        "id_usuario",
        "id_servico",
        "id_agenda",
        "data",
    ];


    public function usuario()
    {
        return $this->belongsTo(User::class,'id_usuario', 'id_usuario');
    }

    public function agenda()
    {
        return $this->belongsTo(Agenda::class, 'id_agenda', ownerKey: 'id_agenda');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'id_servico', ownerKey: 'id_servico');
    }
    

}