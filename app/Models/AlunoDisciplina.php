<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoDisciplina extends Model
{
    use HasFactory;

    protected $table = 'aluno_disciplina';

    protected $fillable = [
        'aluno_id',
        'disciplina_id',
        'periodo_id'
    ];

    public function Nota()
    {
        return $this->hasOne(Nota::class, 'aluno_disciplina_id');
    }

    public function Aluno()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_disciplina', 'aluno_id');
    }

    public function Disciplina()
    {
        return $this->belongsToMany(Disciplina::class, 'aluno_disciplina', 'disciplina_id');
    }
}
