<?php

namespace App\Infra\Repositories;

use App\Domain\AlunoDisciplina\Contracts\AlunoDisciplinaInterface;
use App\Models\Aluno;
use App\Models\AlunoDisciplina;


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

  public function getTeste($id)
  {
    // $query = Aluno::with('Disciplina.Notas')->find($id);
    $query = AlunoDisciplina::where('aluno_id', $id)->with('Disciplina', 'Nota')
      ->get();

    
    return $query;
  }
}
