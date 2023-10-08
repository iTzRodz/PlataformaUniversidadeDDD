<?php
namespace App\Services;

use App\Domain\Alunos\Contracts\AlunoInterface;
use App\Domain\Boletim\Contracts\BoletimInterface;
use Exception;
use Illuminate\Http\Request;

class BoletimService {
  protected $interface;
  protected $alunoInterface;
  public function __construct(BoletimInterface $boletimInterface, AlunoInterface $alunoInterface)
  {
    $this->interface = $boletimInterface;
    $this->alunoInterface = $alunoInterface;
  }

  public function getBoletimByAluno(int $aluno_id)
  {
    $aluno = $this->alunoInterface->getAlunosById($aluno_id);

    if ($aluno == null) {
      throw new Exception("ID do aluno não foi encontrado", 1);
    }

    return $this->interface->getBoletimByAluno($aluno->id);
  }
}