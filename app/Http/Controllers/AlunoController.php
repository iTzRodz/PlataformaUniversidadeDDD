<?php

namespace App\Http\Controllers;

use App\Services\AlunoService;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private $alunoService;

    public function __construct(AlunoService $alunoService)
    {
        $this->alunoService = $alunoService;
    }

    public function getAlunos()
    {
        return $this->alunoService->getAlunos();
    }

    public function getAlunosById(int $id)
    {
        return $this->alunoService->getAlunosById($id);
    }

    public function insertAluno(Request $request)
    {
        return $this->alunoService->insertAluno($request);
    }
}
