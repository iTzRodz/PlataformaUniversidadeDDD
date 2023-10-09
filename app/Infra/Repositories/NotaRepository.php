<?php

namespace App\Infra\Repositories;

use App\Domain\Models\Nota\Nota;
use App\Infra\Contracts\NotaInterface;
use Illuminate\Http\Request;

class NotaRepository implements NotaInterface
{
  protected $model;

  public function __construct(Nota $nota)
  {
    $this->model = $nota;
  }

  public function store(Request $request): Nota
  {
    $nota = Nota::create($request->all());
    return $nota;
  }

  public function getNotasByAlunoDisciplina(int $id): Nota
  {
    $notas = Nota::with('AlunoDisciplina')
      ->find($id);

    return $notas;
  }
}
