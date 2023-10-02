<?php
namespace App\Services;

use App\Domain\Periodos\Contracts\PeriodoInterface;
use App\Models\Periodo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PeriodoService 
{
  protected $interface;

  public function __construct(PeriodoInterface $periodoInterface)
  {
    $this->interface = $periodoInterface;
  }

  public function store(Request $request): Periodo
  {
    return $this->interface->store($request);
  }
}