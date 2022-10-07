<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratórios extends Model
{
    use HasFactory;


    protected $table = 'Laboratórios';

    protected $fillable = [
        'id',
        'NomeLab',
        'NumLugares',
        'NumComputadores',
        'InformaçõesAdicionais',
        'EstadoLab'
    ];
}
