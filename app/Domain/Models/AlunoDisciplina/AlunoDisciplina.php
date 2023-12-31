<?php
namespace App\Domain\Models\AlunoDisciplina;

use App\Domain\Models\Aluno\Aluno;
use App\Domain\Models\Disciplina\Disciplina;
use App\Domain\Models\Nota\Nota;
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
        return $this->belongsTo(Aluno::class);
    }

    public function Disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }
}