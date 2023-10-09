<?php

namespace App\Infra\Repositories;

use App\Domain\Models\AlunoDisciplina\AlunoDisciplina;
use App\Infra\Contracts\BoletimInterface;

class BoletimRepository implements BoletimInterface
{
  public function getBoletimByAluno(int $aluno_id)
  {
    $query = AlunoDisciplina::where('aluno_id', $aluno_id)->with('Aluno', 'Disciplina', 'Nota')
    ->get();

  
  return $query;
  }
}
