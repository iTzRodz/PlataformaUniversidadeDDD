<?php
namespace App\Domain\AlunoDisciplina\Contracts;


interface AlunoDisciplinaInterface
{
  public function store(int $aluno_id, int $disciplina_id);
}
