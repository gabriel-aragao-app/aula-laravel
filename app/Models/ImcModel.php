<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImcModel extends Model
{
    protected $table = "imc";

    public function faixas()
    {
        return $this->belongsTo(FaixaModel::class, 'id_faixa');
        
    }
}
