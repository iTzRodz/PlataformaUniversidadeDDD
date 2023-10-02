<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';

    protected $fillable = [
        'nome',
        'valor',
        'disponivel',
        'ead'
    ];

    public function Aluno()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_disciplina')
            ->withPivot('periodo_id');
    }

    public function Periodo()
    {
        return $this->belongsToMany(Periodo::class, 'aluno_disciplina')
            ->withPivot('aluno_id');
    }
}
