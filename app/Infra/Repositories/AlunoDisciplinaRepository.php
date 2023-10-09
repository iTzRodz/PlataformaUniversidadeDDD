<?php

namespace App\Infra\Repositories;

use App\Domain\Models\AlunoDisciplina\AlunoDisciplina;
use App\Infra\Contracts\AlunoDisciplinaInterface;


class AlunoDisciplinaRepository implements AlunoDisciplinaInterface
{

  protected $model;

  public function __construct(AlunoDisciplina $alunoDisciplina)
  {
    $this->model = $alunoDisciplina;
  }

  public function store(int $aluno_id, int $disciplina_id, int $periodo_id)
  {
    $alunoDisciplina = AlunoDisciplina::create([
      'aluno_id' => $aluno_id,
      'disciplina_id' => $disciplina_id,
      'periodo_id' => $periodo_id,
    ]);

    return $alunoDisciplina;
  }

}
