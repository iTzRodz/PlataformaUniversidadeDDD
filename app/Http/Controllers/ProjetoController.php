<?php

namespace App\Http\Controllers;

use App\Services\ProjetoService;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    protected $service;

    public function __construct(ProjetoService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        return $this->service->store($request);
    }
}
