<?php
namespace App\Infra\Contracts;

use App\Domain\Models\Aluno\Aluno;
use App\Http\Requests\AlunoRequest;
use App\Http\Requests\AlunoUpdateRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface AlunoInterface
{
  public function getAlunos() : Collection;
  public function getAlunosById(int $id): ?Aluno;
  public function insertAluno(AlunoRequest $request);
  public function update(Aluno $aluno, AlunoUpdateRequest $body): Aluno;
  public function delete(Aluno $aluno);
}
