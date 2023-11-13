<?php 

namespace App\Services;

use App\Infra\Contracts\PesquisadorInterface;
use App\Infra\Contracts\PesquisadorProjetoInterface;
use App\Infra\Contracts\ProjetoInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class ProjetoService {

    protected $projetoInterface;
    protected $pesquisadorInterface; 
    protected $pesquisadorProjetoInterface;
    public function __construct(ProjetoInterface $projetoInterface, PesquisadorInterface $pesquisadorInterface, PesquisadorProjetoInterface $pesquisadorProjetoInterface , PesquisadorProjetoService $pesquisadorProjetoService)
    {
        $this->projetoInterface = $projetoInterface;
        $this->pesquisadorInterface = $pesquisadorInterface;
        $this->pesquisadorProjetoInterface = $pesquisadorProjetoService;
    }

    public function store(Request $request)
    {
        $pesquisador = $this->pesquisadorInterface->getById($request->pesquisador_id);

        if (!$pesquisador) {
            throw new Exception("Pesquisador com o id " . $request->pesquisador_id . " Não foi encontrado", 1);
        }
        
        $isMaiorUmAno = $this->verificaAnosDuracao($request->projeto);

        if (!$isMaiorUmAno) {
            throw new Exception("Projeto precisa ser maior que 1 ano de duração ", 1);
        }
        
        if ($pesquisador->titulacao->nome == 'Mestrado') {
            $result = $this->projetoInterface->store($request->projeto);
            
            $pesquisadorProjeto = $this->pesquisadorProjetoInterface->store($pesquisador->id, $result->getdata()->id);
            
            return response()->json([
                'Projeto' => $result
            ]);
        } else {
            throw new Exception("Pesquisador precisa ser Mestre", 1);
        }
    }

    public function verificaAnosDuracao(array $data_inicio_fim) 
    {
        $dataProjeto = $data_inicio_fim[0];
        $data_inicio = Carbon::parse($dataProjeto['data_inicio']);
        $data_final = Carbon::parse($dataProjeto['data_final']);

        $diferencaEmAnos = $data_inicio->diffInYears($data_final);
        if ($diferencaEmAnos > 1) {
            return true;
        } else {
            return false;
        }
    }
    
}