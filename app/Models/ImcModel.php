<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FaixaModel;

class ImcModel extends Model
{
    protected $table = "imc";
    public $timestamps = false;

    public function faixas()
    {
        return $this->belongsTo(FaixaModel::class, 'id_faixa');
        
    }
}
