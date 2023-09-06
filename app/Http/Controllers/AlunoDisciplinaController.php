<?php

namespace App\Http\Controllers;

use App\Services\AlunoDisciplinaService;
use Illuminate\Http\Request;

class AlunoDisciplinaController extends Controller
{
    protected $service;

    public function __construct(AlunoDisciplinaService $alunoDisciplinaService)
    {
        $this->service = $alunoDisciplinaService;
    }

    public function store(Request $request)
    {
        return $this->service->store($request);
    }
}
