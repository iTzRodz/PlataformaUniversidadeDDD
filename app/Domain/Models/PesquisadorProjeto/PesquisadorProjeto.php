<?php

namespace App\Domain\Models\PesquisadorProjeto;

use App\Domain\Models\Pesquisador\Pesquisador;
use App\Domain\Models\Projeto\Projeto;
use App\Domain\Models\Titulacao\Titulacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesquisadorProjeto extends Model
{
    use HasFactory;

    protected $table = 'pesquisador_projeto';

    protected $fillable = [
        'pesquisador_id',
        'projeto_id',
        'titulacao_id'
    ];

    public function pesquisadores()
    {
        return $this->belongsToMany(Pesquisador::class, 'pesquisador_projeto', 'pesquisador_id', 'projeto_id');
    }
    
    public function projetos()
    {
        return $this->belongsToMany(Projeto::class, 'pesquisador_projeto', 'projeto_id', 'pesquisador_id');
    }
   
}
