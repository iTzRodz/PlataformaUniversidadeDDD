<?php

namespace App\Domain\Models\Titulacao;

use App\Domain\Models\Pesquisador\Pesquisador;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulacao extends Model
{
    use HasFactory;
    protected $table = 'titulacao';

    protected $fillable = [
        "nome"
    ];

    public function Pesquisador()
    {
        return $this->hasOne(Pesquisador::class);

    }
}
