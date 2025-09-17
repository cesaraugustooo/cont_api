<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public $primaryKey = 'id_turma';

    protected $fillable = ['nome_turma','categorias_id_categoria ','ativo'];

    public $timestamps = false;

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
