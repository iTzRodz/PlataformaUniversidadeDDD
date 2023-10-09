<?php

namespace App\Infra\Contracts;

interface BoletimInterface
{
  public function getBoletimByAluno(int $aluno_id);
}
