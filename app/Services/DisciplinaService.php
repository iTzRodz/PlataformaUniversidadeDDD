<?php

namespace App\Services;

use App\Http\Requests\DisciplinaRequest;
use App\Http\Requests\DisciplinaUpdateRequest;
use App\Infra\Contracts\DisciplinaInterface;
use App\Models\Disciplina;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DisciplinaService
{

  protected $interface;

  public function __construct(DisciplinaInterface $disciplinaInterface)
  {
    $this->interface = $disciplinaInterface;
  }

  public function getAllDisciplinas(): Collection
  {
    return $this->interface->getAllDisciplinas();
  }

  public function getDisciplinaById(int $id) : ?Model
  {
    $disciplina = $this->interface->getDisciplinaById($id);

    if ($disciplina == null) {
      throw new Exception("Disciplina não encontrada", 1);
    }
    return $disciplina;
  }

  public function insertDisciplina(DisciplinaRequest $request)
  {
    return $this->interface->insertDisciplina($request);
  }

  public function updateDisciplina(int $id, DisciplinaUpdateRequest $request)
  {
    $disciplina = $this->getDisciplinaById($id);

    if ($disciplina == null) {
      throw new Exception("Disciplina não encontrada", 1);
    }

    return $this->interface->updateDisciplina($disciplina, $request);
  }

  public function deleteDisciplina(int $id)
  {
    try {
      $disciplina = $this->getDisciplinaById($id);
      if ($disciplina == null) {
        throw new Exception("Nenhuma disciplina foi encontrada", 1);
      }

      $body = $this->interface->deleteDisciplina($disciplina);

      return response()->json($body, 201);
    } catch (\Exception $ex) {
      $exception = [
        'Message' => $ex->getMessage(),
        'Code' => $ex->getCode(),
        'Exception' => $ex->__toString()
      ];

      return response()->json($exception, 500);
    }
  }

  public function disciplinasByIdAluno(int $idAluno) 
  {
    return $this->interface->disciplinasByIdAluno($idAluno);
  }
}
