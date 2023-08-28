<?php

namespace App\Services;

use App\Domain\Disciplinas\Contracts\DisciplinaInterface;
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

  public function insertDisciplina(Request $request)
  {
    return $this->interface->insertDisciplina($request);
  }

  public function updateDisciplina(int $id, Request $request)
  {
    return $this->interface->updateDisciplina($id, $request);
  }

  public function deleteDisciplina(int $id)
  {
    try {
      $disciplina = Disciplina::find($id);
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
