<?php

namespace App\Infra\Repositories;

use App\Domain\Models\Aluno\Aluno;
use App\Domain\Models\Disciplina\Disciplina;
use App\Http\Requests\DisciplinaRequest;
use App\Infra\Contracts\DisciplinaInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DisciplinaRepository implements DisciplinaInterface
{

  protected $model;

  public function __construct(Disciplina $disciplina)
  {
    $this->model = $disciplina;
  }

  public function getAllDisciplinas(): Collection
  {
    //$disciplina = Disciplina::all();
    return $this->model->all();
  }

  public function getDisciplinaById(int $id) : ?Model
  {
    return $this->model->find($id);
  }

  public function insertDisciplina(DisciplinaRequest $request)
  {
    return $this->model->create($request->all());
  }

  public function updateDisciplina(Disciplina $disciplina, Request $request) : ?Disciplina
  {
    $disciplina->update($request->all());

    return $disciplina;
  }

  public function deleteDisciplina(Disciplina $disciplina)
  {
    $disciplina->delete();
    return $disciplina;
  }

  public function disciplinasByIdAluno(int $idAluno)
  {
    $query = Aluno::with('Disciplina')
    ->find($idAluno);


    return $query;
  }
}
