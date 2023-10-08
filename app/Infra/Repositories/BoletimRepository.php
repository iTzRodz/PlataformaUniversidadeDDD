<?php

namespace App\Infra\Repositories;

use App\Domain\Boletim\Contracts\BoletimInterface;
use App\Models\AlunoDisciplina;
use App\Models\Boletim;
use Illuminate\Http\Request;

class BoletimRepository implements BoletimInterface
{
  public function getBoletimByAluno(int $aluno_id)
  {
    $query = AlunoDisciplina::where('aluno_id', $aluno_id)->with('Aluno', 'Disciplina.periodo', 'Nota')
    ->get();

  
  return $query;
  }
}
