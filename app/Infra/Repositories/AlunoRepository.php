<?php

namespace App\Infra\Repositories;

use App\Domain\Models\Aluno\Aluno;
use App\Http\Requests\AlunoRequest;
use App\Http\Requests\AlunoUpdateRequest;
use App\Infra\Contracts\AlunoInterface;
use Illuminate\Database\Eloquent\Collection;


class AlunoRepository implements AlunoInterface
{

  protected $model;

  public function __construct(Aluno $aluno)
  {
    $this->model = $aluno;
  }

  public function getAlunos(): Collection
  {
    return $this->model->all();
  }

  public function getAlunosById(int $id): ?Aluno
  {
    return $this->model->find($id);
  }

  public function insertAluno(AlunoRequest $request)
  {
    return $this->model->create($request->all());
  }

  public function update(Aluno $aluno, AlunoUpdateRequest $request) : Aluno
  {
    $aluno->update($request->all());

    return $aluno;
  }

  public function delete(Aluno $aluno)
  {
    $aluno->delete();
    return $aluno;
  }
}
