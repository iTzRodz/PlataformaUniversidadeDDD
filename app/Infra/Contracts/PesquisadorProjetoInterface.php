<?php

namespace App\Infra\Contracts;

Interface PesquisadorProjetoInterface
{

    public function store(array $body);
    public function getProjeto(int $id);
}