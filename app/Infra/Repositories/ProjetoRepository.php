<?php
namespace App\Infra\Repositories;

use App\Domain\Models\Projeto\Projeto;
use App\Infra\Contracts\ProjetoInterface;
use Illuminate\Http\Request;

class ProjetoRepository implements ProjetoInterface {

    protected $model;

    public function __construct(Projeto $projeto)
    {
        $this->model = $projeto;
    }

    public function getById(int $id): ?Projeto
    {
        
    }

    public function store($dados)
    {
        [$projeto] = $dados;
        $result = $this->model->create($projeto);
        return response()->json($result);
    }
}