<?php 
namespace App\Infra\Repositories;

use App\Domain\Models\Pesquisador\Pesquisador;
use App\Infra\Contracts\PesquisadorInterface;
use Illuminate\Http\Request;

class PesquisadorRepository implements PesquisadorInterface 
{
    protected $model;

    public function __construct(Pesquisador $pesquisador)
    {
        $this->model = $pesquisador;
    }

    public function getById(int $id): ?Pesquisador
    {
        return $this->model::with('Titulacao')
            ->find($id);

    }

    public function store(Request $request): Pesquisador
    {
        
    }
}