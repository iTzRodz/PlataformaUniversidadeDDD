<?php

namespace App\Services;

use App\Domain\Notas\Contracts\NotaInterface;
use Illuminate\Http\Request;

class NotaService
{
  protected $interface;

  public function __construct(NotaInterface $notaInterface)
  {
    $this->interface = $notaInterface;
  }

  public function store(Request $request)
  {
    return $this->interface->store($request);
  }

  public function getNotasByAlunoDisciplina(int $id)
  {
    return $this->interface->getNotasByAlunoDisciplina($id);
  }
}
