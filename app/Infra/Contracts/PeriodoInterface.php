<?php

namespace App\Infra\Contracts;

use App\Domain\Models\Periodo\Periodo;
use App\Http\Requests\PeriodoRequest;
use Illuminate\Http\Request;

interface PeriodoInterface 
{
  public function store(PeriodoRequest $request): Periodo;
}