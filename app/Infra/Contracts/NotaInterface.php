<?php

namespace App\Infra\Contracts;

use App\Domain\Models\Nota\Nota;
use Illuminate\Http\Request;

interface NotaInterface
{
  public function store(Request $request): Nota;
  public function  getNotasByAlunoDisciplina(int $id): Nota;
}
