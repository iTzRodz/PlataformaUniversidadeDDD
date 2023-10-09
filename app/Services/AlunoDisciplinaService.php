<?php

namespace App\Services;

use App\Http\Requests\AlunoDisciplinaRequest;
use App\Infra\Contracts\AlunoDisciplinaInterface;
use App\Infra\Contracts\AlunoInterface;
use App\Infra\Contracts\DisciplinaInterface;
use Exception;

class AlunoDisciplinaService
{

  protected $interface;
  protected $alunoInterface;
  protected $disciplinaInterface;

  public function __construct(AlunoDisciplinaInterface $alunoDisciplinaInterface, AlunoInterface $alunoInterface, DisciplinaInterface $disciplinaInterface)
  {
    $this->interface = $alunoDisciplinaInterface;
    $this->alunoInterface = $alunoInterface;
    $this->disciplinaInterface = $disciplinaInterface;
  }

  public function store(AlunoDisciplinaRequest $request)
  {
    $aluno_id = $request->aluno_id;
    $aluno = $this->alunoInterface->getAlunosById($aluno_id);
    $periodo_id = $request->periodo_id;

    if ($aluno == null) {
      throw new Exception("Aluno não encontrado", 1);
    }

    if ($periodo_id == null) {
      throw new Exception("Periodo não encontrado", 1);
    }
    
    foreach ($request->disciplinas as $disciplina) {
    
      $isDisciplina = $this->disciplinaInterface->getDisciplinaById($disciplina["disciplina_id"]);
      if ($isDisciplina == null) {
        throw new Exception("Disciplina não encontrada", 1);
      }

      $response = $this->interface->store($aluno_id, $disciplina["disciplina_id"], $periodo_id);
    }

    return response()->json($response, 201);
  }

}
