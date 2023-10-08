<?php

namespace App\Domain\Periodos\Contracts;

use App\Http\Requests\PeriodoRequest;
use App\Models\Periodo;
use Illuminate\Http\Request;

interface PeriodoInterface 
{
  public function store(PeriodoRequest $request): Periodo;
}