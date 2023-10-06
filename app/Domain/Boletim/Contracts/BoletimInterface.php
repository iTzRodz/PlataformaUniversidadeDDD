<?php

namespace App\Domain\Boletim\Contracts;

use App\Models\Boletim;
use Illuminate\Http\Request;

interface BoletimInterface
{
  public function store(Request $request): Boletim;
  public function getBoletimByIdAluno(int $aluno_id): ?Boletim;
}
