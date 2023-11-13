<?php

namespace App\Infra\Contracts;

use App\Domain\Models\Pesquisador\Pesquisador;
use Illuminate\Http\Request;

Interface PesquisadorInterface
{
    public function store(Request $request) : Pesquisador;
    public function getById(int $id) : ?Pesquisador;

}