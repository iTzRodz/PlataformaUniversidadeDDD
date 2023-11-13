<?php

namespace App\Domain\Models\Projeto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table = 'projeto';
    
    protected $fillable = [
        "nome",
        "descricao",
        "data_inicio",
        "data_final"
    ];
    
    public function pesquisadores()
    {
        return $this->belongsToMany(Pesquisador::class, 'pesquisador_projeto', 'pesquisador_id', 'projeto_id');
    }
}
