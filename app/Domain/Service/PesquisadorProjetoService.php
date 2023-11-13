<?php
namespace App\Domain\Service;
use App\Infra\Contracts\PesquisadorInterface;
use App\Infra\Contracts\ProjetoInterface;
use App\Infra\Contracts\TitulacaoInterface;
use Exception;
use Illuminate\Http\Request;

class PesquisadorProjetoService 
{
    protected $projetoInterface;
    protected $pesquisadorInterface;
    protected $titulacaoInterface;
    
    public function __construct(PesquisadorInterface $pesquisador, ProjetoInterface $projeto, TitulacaoInterface $titulacao)
    {
        $this->projetoInterface = $projeto;
        $this->pesquisadorInterface = $pesquisador;
        $this->titulacaoInterface = $titulacao;
    }

    public function getProjeto(Request $request) {
        $projeto = $this->projetoInterface->getById($request->projeto_id);
        $pesquisador = $this->pesquisadorInterface->getById($request->pesquisador_id);
        

        if (!$projeto) {
            # code...
        }
        throw new Exception("Error Processing Request", 1);
        
    }
}