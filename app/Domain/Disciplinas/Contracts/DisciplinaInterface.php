<?php

namespace App\Domain\Disciplinas\Contracts;

use App\Http\Requests\DisciplinaRequest;
use App\Http\Requests\DisciplinaUpdateRequest;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface DisciplinaInterface
{
  public function getAllDisciplinas(): Collection;
  public function insertDisciplina(DisciplinaRequest $request);
  public function updateDisciplina(Disciplina $disciplina, DisciplinaUpdateRequest $request) : ?Disciplina;
  public function getDisciplinaById(int $id) : ?Model;
  public function deleteDisciplina(Disciplina $disciplina);
  public function disciplinasByIdAluno(int $idAluno);
}
