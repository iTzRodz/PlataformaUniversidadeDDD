<?php

namespace App\Infra\Contracts;

use App\Domain\Models\Projeto\Projeto;
use Illuminate\Http\Request;

Interface ProjetoInterface
{
    public function store($dados);
    public function getById(int $id) : ?Projeto;
}