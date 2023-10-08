<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'dataCadastro',
        'ativo'
    ];

    public function Disciplina()  
    {
        return $this->BelongsToMany(Disciplina::class, 'aluno_disciplina', 'aluno_id', 'disciplina_id')
            ->withPivot('periodo_id');
    }

    public function Periodo()
    {
        return $this->belongsToMany(Periodo::class, 'aluno_disciplina')
            ->withPivot('aluno_id');
    }
}
