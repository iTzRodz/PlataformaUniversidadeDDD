<?php
namespace App\Domain\Models\Nota;

use App\Domain\Models\AlunoDisciplina\AlunoDisciplina;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = "notas";

    protected $fillable = [
        'p1',
        'p2',
        'sub',
        'exame',
        'aluno_disciplina_id'
    ];

    public function AlunoDisciplina()
    {
        return $this->hasOne(AlunoDisciplina::class, 'id', 'aluno_disciplina_id');
    }
}