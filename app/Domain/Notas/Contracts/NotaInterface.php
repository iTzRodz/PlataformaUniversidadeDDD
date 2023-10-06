<?php

namespace App\Domain\Notas\Contracts;

use App\Models\Nota;
use Illuminate\Http\Request;

interface NotaInterface
{
  public function store(Request $request): Nota;
  public function  getNotasByAlunoDisciplina(int $id): Nota;
}
