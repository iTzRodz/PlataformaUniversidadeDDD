<?php

namespace App\Infra\Repositories;

use App\Domain\AlunoDisciplina\Contracts\AlunoDisciplinaInterface;
use App\Models\AlunoDisciplina;


class AlunoDisciplinaRepository implements AlunoDisciplinaInterface
{

  protected $model;

  public function __construct(AlunoDisciplina $alunoDisciplina)
  {
    $this->model = $alunoDisciplina;
  }

  public function store(int $aluno_id, int $disciplina_id)
  {
    $alunoDisciplina = AlunoDisciplina::create([
      'aluno_id' => $aluno_id,
      'disciplina_id' => $disciplina_id
    ]);

    return $alunoDisciplina;
  }
}
