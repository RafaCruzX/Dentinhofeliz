<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;

class Agenda extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'agenda';
 
    protected $primaryKey = 'id_agenda';


    public $timestamps = false;

    protected $fillable = [
        "id_usuario",//foreignkey
        "dia_da_semana",
        "horario",
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class,'id_usuario', 'id_usuario');
    }

    public function agendamento()
    {
        return $this->hasMany(User::class,'id_agenda', 'id_agenda');
    }

}