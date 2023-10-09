<?php
namespace App\Services;

use App\Domain\Models\Periodo\Periodo;
use App\Http\Requests\PeriodoRequest;
use App\Infra\Contracts\PeriodoInterface;

class PeriodoService 
{
  protected $interface;

  public function __construct(PeriodoInterface $periodoInterface)
  {
    $this->interface = $periodoInterface;
  }

  public function store(PeriodoRequest $request): Periodo
  {
    return $this->interface->store($request);
  }
}