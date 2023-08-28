<?php


namespace App\Domain\Alunos\Contracts;

use Aluno;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface AlunoInterface
{
  public function getAlunos() : Collection;
  public function getAlunosById(int $id): Model;
  public function insertAluno(Request $request);
  // public function updateAluno(int $id, array $body);
  // public  function deleteAluno(int $id);
}
