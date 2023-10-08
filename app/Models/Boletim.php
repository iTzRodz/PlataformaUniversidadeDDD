<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletim extends Model
{
    use HasFactory;

    protected $table = 'boletim';

    protected $fillable = [
        'nota_id',
        'frequencia',
    ];

    // public function Nota()
    // {
    //     return $this->hasMany(Nota::class, 'nota_id');
    // }
}
