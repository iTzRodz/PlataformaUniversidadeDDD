<?php
namespace App\Infra\Repositories;

use App\Domain\Periodos\Contracts\PeriodoInterface;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PeriodoRepository implements PeriodoInterface
{
  
  protected $model;

  public function __construct(Periodo $periodo)
  {
    $this->model = $periodo;
  }

  public function store(Request $request): Periodo
  {
    $periodo = Periodo::create($request->all());
    return $periodo;
  }
}