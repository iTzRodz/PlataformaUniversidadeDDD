<?php

namespace App\Domain\Disciplinas\Contracts;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Http\Request;

interface DisciplinaInterface
{
  public function getAllDisciplinas(): Collection;
  public function insertDisciplina(Request $request);
  public function updateDisciplina(int $id, Request $request);
  public function deleteDisciplina(int $id);
  public function disciplinasByIdAluno(int $idAluno);
}
