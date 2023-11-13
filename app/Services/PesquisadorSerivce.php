<?php

namespace App\Services;

use App\Infra\Contracts\PesquisadorInterface;
use Illuminate\Http\Request;

class PesquisadorService 
{
    protected $pesquisadorInterface;

    public function __construct(PesquisadorInterface $pesquisadorInterface)
    {
        $this->pesquisadorInterface = $pesquisadorInterface;
    }

    public function store(Request $request)
    {
        return $this->pesquisadorInterface->store($request);
    }

    public function getById(int $id)
    {
        return $this->pesquisadorInterface->getById($id);
    }
}