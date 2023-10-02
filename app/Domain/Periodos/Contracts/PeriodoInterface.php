<?php

namespace App\Domain\Periodos\Contracts;

use App\Models\Periodo;
use Illuminate\Http\Request;

interface PeriodoInterface 
{
  public function store(Request $request): Periodo;
}