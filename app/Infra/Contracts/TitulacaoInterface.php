<?php

namespace App\Infra\Contracts;

use App\Domain\Models\Titulacao\Titulacao;

Interface TitulacaoInterface
{
    public function getAllTitulacao() : Titulacao;
}