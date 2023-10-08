<?php

namespace App\Http\Controllers;

use App\Services\BoletimService;
use Illuminate\Http\Request;

class BoletimController extends Controller
{
    protected $service;

    public function __construct(BoletimService $boletimService)
    {
        $this->service = $boletimService;
    }

    public function getBoletimByAluno(int $aluno_id)
    {
        return $this->service->getBoletimByAluno($aluno_id);
    }
}
