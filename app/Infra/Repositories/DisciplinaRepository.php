<?php

namespace App\Infra\Repositories;

use App\Domain\Disciplinas\Contracts\DisciplinaInterface;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;
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

  public function insertDisciplina(Request $request)
  {
    $disciplina = Disciplina::create($request->all());
    return $disciplina;
  }

  public function updateDisciplina(int $id ,Request $request)
  {
    $disciplina = Disciplina::find($id);

    return $disciplina;
  }

  public function deleteDisciplina($disciplina)
  {
    $disciplina->delete();
    return $disciplina;
  }

  public function disciplinasByIdAluno(int $idAluno)
  {
    $query = DB::table('disciplinas')
      ->join('alunos', 'disciplinas.id', '=', 'alunos.disciplina_id')
      ->select(
        'disciplinas.nome',
        'alunos.nome AS nome_aluno'
        )
      ->where('alunos.id', '=', $idAluno)
      ->get();

    return $query;
  }
}
