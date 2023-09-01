<?php

namespace App\Services;

use App\Domain\Alunos\Contracts\AlunoInterface;
use App\Models\Aluno;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AlunoService
{

  protected $interface;

  public function __construct(AlunoInterface $alunoInterface)
  {
    $this->interface = $alunoInterface;
  }

  public function getAlunos(): Collection
  {
    return $this->interface->getAlunos();
  }

  public function getAlunosbyId(int $id): ?Model
  {
    return $this->interface->getAlunosById($id);
  }

  public function insertAluno(Request $request)
  {
    return $this->interface->insertAluno($request);
  }

  public function update(int $id, Request $request)
  {
    $aluno = $this->getAlunosbyId($id);

    if ($aluno == null) {
      throw new Exception("Aluno não encontrado! Favor vericar o codigo do aluno", 1);
    }

    $response = $this->interface->update($aluno, $request);
    return $response;
  }

  public function delete(int $id)
  {
    $aluno = $this->getAlunosbyId($id);

    if ($aluno == null) {
      throw new Exception("Aluno não encontrado! Favor vericar o codigo do aluno", 1);
    }

    $response = $this->interface->delete($aluno);
    return $response;
  }
}
