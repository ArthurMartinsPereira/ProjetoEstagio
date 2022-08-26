<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitações extends Model
{
    use HasFactory;


    protected $table = 'Solicitações';

    protected $fillable = [
        'laboratório',
        'Dia',
        'Horário',
        'Professor',
        'Estado'
    ];
}
