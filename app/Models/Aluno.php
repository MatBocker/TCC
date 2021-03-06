<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\plano;
use App\Models\treino;
use App\Models\Avaliacao;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;
    protected $fillable = ['segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];

    public function treino()
    {
        return $this->belongsTo(treino::class,'treino_id');     
    }

    public function plano()
    {
        return $this->belongsTo(plano::class,'plano_id');
    }
    public function avaliacao()
    {
        return $this->hasMany(Avaliacao::Class);
    }
}


