<?php

namespace App\Http\Controllers;

use App\Services\NotaService;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    protected $service;

    public function __construct(NotaService $notaService)
    {
        $this->service = $notaService;
    }

    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    public function getNotasByAlunoDisciplina(int $id)
    {
        return $this->service->getNotasByAlunoDisciplina($id);
    }
}
