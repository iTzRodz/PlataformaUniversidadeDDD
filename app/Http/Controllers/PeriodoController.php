<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeriodoRequest;
use App\Services\PeriodoService;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    protected $service;

    public function __construct(PeriodoService $periodoService)
    {
        $this->service = $periodoService;
    }

    public function store(PeriodoRequest $request)
    {
        return $this->service->store($request);
    }
}
