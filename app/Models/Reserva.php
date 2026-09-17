<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'professor',
        'turma',
        'data',
        'hora_inicio',
        'hora_fim',
        'finalidade'
    ];
}
