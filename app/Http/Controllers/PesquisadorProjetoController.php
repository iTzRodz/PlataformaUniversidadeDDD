<?php

namespace App\Http\Controllers;

use App\Services\PesquisadorProjetoService;
use Illuminate\Http\Request;

class PesquisadorProjetoController extends Controller
{
    protected $service;

    public function __construct(PesquisadorProjetoService $service)
    {
        $this->service = $service;
    }

    public function getProjeto(int $id)
    {
        return $this->service->getProjeto($id);
    }
}
