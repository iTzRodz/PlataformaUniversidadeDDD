<?php 
namespace App\Infra\Repositories;

use App\Domain\Models\Pesquisador\Pesquisador;
use App\Domain\Models\PesquisadorProjeto\PesquisadorProjeto;
use App\Infra\Contracts\PesquisadorInterface;
use App\Infra\Contracts\PesquisadorProjetoInterface;
use Illuminate\Http\Request;

class PesquisadorProjetoRepository implements PesquisadorProjetoInterface 
{
    protected $model;

    public function __construct(PesquisadorProjeto $pesquisador)
    {
        $this->model = $pesquisador;
    }

    public function getProjeto(int $pesquisadorProjeto_id)
    {
        
        return $this->model->with('pesquisadores', 'projetos')->find($pesquisadorProjeto_id);

    }

    public function store(array $body)
    {
        return $this->model->create($body);
    }
}