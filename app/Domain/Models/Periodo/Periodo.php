<?php

namespace App\Domain\Models\Periodo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = 'periodos';

    protected $fillable = [
        'ano',
        'termo'
    ];

    public function Disciplina()  
    {
        return $this->BelongsToMany(Disciplina::class, 'aluno_disciplina');
    }

    public function Aluno()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_disciplina');
    }
}