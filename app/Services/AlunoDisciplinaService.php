<?php

namespace App\Services;

use App\Domain\AlunoDisciplina\Contracts\AlunoDisciplinaInterface;
use App\Domain\Alunos\Contracts\AlunoInterface;
use App\Domain\Disciplinas\Contracts\DisciplinaInterface;
use App\Models\Disciplina;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

  public function store(Request $request)
  {
    $aluno_id = $request->aluno_id;
    $aluno = $this->alunoInterface->getAlunosById($aluno_id);
    
    if ($aluno == null) {
      throw new Exception("Aluno não encontrado", 1);
    }
    
    foreach ($request->disciplinas as $disciplina) {
    
      $isDisciplina = $this->disciplinaInterface->getDisciplinaById($disciplina["disciplina_id"]);
      if ($isDisciplina == null) {
        throw new Exception("Disciplina não encontrada", 1);
      }

      $response = $this->interface->store($aluno_id, $disciplina["disciplina_id"]);
    }

    return response()->json($response, 201);
  }

}
