<?php
namespace App\Services;

use App\Infra\Contracts\PesquisadorInterface;
use App\Infra\Contracts\PesquisadorProjetoInterface;
use App\Infra\Contracts\ProjetoInterface;
use App\Infra\Contracts\TitulacaoInterface;
use Exception;
use Illuminate\Http\Request;

class PesquisadorProjetoService 
{
    protected $pesquisadorProjetoInterface;
    
    public function __construct(PesquisadorProjetoInterface $pesquisadorProjetoInterface)
    {
        $this->pesquisadorProjetoInterface = $pesquisadorProjetoInterface;
    }

    public function store(int $pesquisador_id, int $projeto_id)
    {
        $body = [
            'pesquisador_id' => $pesquisador_id,
            'projeto_id' => $projeto_id,
            'titulacao_id' => 1
        ];
        
        return $this->pesquisadorProjetoInterface->store($body);
    }

    public function getProjeto(int $id)
    {
        return $this->pesquisadorProjetoInterface->getProjeto($id);
    }
}

?>