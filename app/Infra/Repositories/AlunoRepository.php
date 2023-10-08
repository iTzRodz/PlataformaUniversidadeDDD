<?php

namespace App\Infra\Repositories;

use App\Domain\Alunos\Contracts\AlunoInterface;
use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AlunoRepository implements AlunoInterface
{

  protected $model;

  public function __construct(Aluno $aluno)
  {
    $this->model = $aluno;
  }

  public function getAlunos(): Collection
  {
    $aluno = Aluno::all();

    return $aluno;
  }

  public function getAlunosById(int $id): ?Aluno
  {
    $aluno = Aluno::find($id);
    return $aluno;
  }

  public function insertAluno(AlunoRequest $request)
  {
    $aluno = Aluno::create($request->all());

    return $aluno;
  }

  public function update(Aluno $aluno, Request $request)
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
