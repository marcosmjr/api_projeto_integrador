<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    /** @use HasFactory<\Database\Factories\OcorrenciaFactory> */
    use HasFactory;

    protected $fillable = [
        'servico_ocorrencias',
        'data_ocorrencias',
        'atendida_ocorrencias',
        'data_atendimento',
        'mensagem_ocorrencias',
        'fk_ocorrencias'
    ];
}
