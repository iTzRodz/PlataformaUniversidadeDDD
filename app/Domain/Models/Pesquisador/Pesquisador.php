<?php

namespace App\Domain\Models\Pesquisador;

use App\Domain\Models\Titulacao\Titulacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisador extends Model
{
    use HasFactory;

    protected $table = 'pesquisador';

    protected $fillable = [
        "nome",
        "titulacao_id"
    ];

    public function Titulacao()
    {
        return $this->belongsTo(Titulacao::class);
    }

    public function projetos()
    {
        return $this->belongsToMany(Projeto::class, 'pesquisador_projeto', 'projeto_id', 'pesquisador_id');
    }
}
