<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Http\Requests\AlunoUpdateRequest;
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

    public function insertAluno(AlunoRequest $request)
    {
        return $this->alunoService->insertAluno($request);
    }

    public function update(int $id, AlunoUpdateRequest $request)
    {
        return $this->alunoService->update($id, $request);
    }

    public function delete(int $id)
    {
        return $this->alunoService->delete($id);
    }
}
