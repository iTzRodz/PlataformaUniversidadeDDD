<?php
namespace App\Infra\Contracts;


interface AlunoDisciplinaInterface
{
  public function store(int $aluno_id, int $disciplina_id, int $periodo_id);
}
