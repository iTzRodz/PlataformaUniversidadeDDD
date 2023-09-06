<?php

namespace App\Domain\Disciplinas\Contracts;

use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface DisciplinaInterface
{
  public function getAllDisciplinas(): Collection;
  public function insertDisciplina(Request $request);
  public function updateDisciplina(Disciplina $disciplina, Request $request);
  public function getDisciplinaById(int $id) : ?Model;
  public function deleteDisciplina(int $id);
  public function disciplinasByIdAluno(int $idAluno);
}
