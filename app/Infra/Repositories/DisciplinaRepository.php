<?php

namespace App\Infra\Repositories;

use App\Domain\Disciplinas\Contracts\DisciplinaInterface;
use App\Models\Aluno;
use App\Models\AlunoDisciplina;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplinaRepository implements DisciplinaInterface
{

  protected $model;

  public function __construct(Disciplina $disciplina)
  {
    $this->model = $disciplina;
  }

  public function getAllDisciplinas(): Collection
  {
    $disciplina = Disciplina::all();

    return $disciplina;
  }

  public function getDisciplinaById(int $id) : ?Model
  {
    $disciplina = Disciplina::find($id);

    return $disciplina;
  }

  public function insertDisciplina(Request $request)
  {
    $disciplina = Disciplina::create($request->all());
    return $disciplina;
  }

  public function updateDisciplina(Disciplina $disciplina ,Request $request)
  {
    $disciplina->update($request->all());

    return $disciplina;
  }

  public function deleteDisciplina($disciplina)
  {
    $disciplina->delete();
    return $disciplina;
  }

  public function disciplinasByIdAluno(int $idAluno)
  {
    $query = Aluno::find($idAluno);

    foreach ($query->Disciplina as $disciplina) {
      $disciplinas = [
        'nome' => $disciplina->nome,
        'valor' => $disciplina->valor,
        'disponivel' => $disciplina->disponivel,
        'ead' => $disciplina->ead
      ];
    }

    return $query;
  }
}
