<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisciplinaRequest;
use App\Services\DisciplinaService;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    protected $service;

    public function __construct(DisciplinaService $disciplinaService)
    {
        $this->service = $disciplinaService;
    }

    public function getDisciplinaById(int $id)
    {
        return $this->service->getDisciplinaById($id);
    }

    public function getAllDisciplinas()
    {
        return $this->service->getAllDisciplinas();
    }

    public function insertDisciplina(DisciplinaRequest $request)
    {
        return $this->service->insertDisciplina($request);
    }

    public function updateDisciplina(int $id, Request $request)  
    {
        return $this->service->updateDisciplina($id, $request);
    }

    public function deleteDisciplina(int $id)
    {
        return $this->service->deleteDisciplina($id);
    }

    public function disciplinasByIdAluno(int $idAluno)
    {
        return $this->service->disciplinasByIdAluno($idAluno);
    }
}
