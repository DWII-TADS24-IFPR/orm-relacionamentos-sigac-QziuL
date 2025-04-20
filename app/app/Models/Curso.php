<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'nome',
        'sigla',
        'total_horas',
        'nivel_id',
        'eixo_id'
    ];

    public function turma(): HasMany{
        return $this->HasMany(Turma::class);
    }

    public function alunos(): HasMany{
        return $this->HasMany(Aluno::class);
    }
}
