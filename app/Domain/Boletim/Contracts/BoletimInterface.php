<?php

namespace App\Domain\Boletim\Contracts;

use App\Models\Boletim;
use Illuminate\Http\Request;

interface BoletimInterface
{
  public function getBoletimByAluno(int $aluno_id);
}
