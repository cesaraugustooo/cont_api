<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contagens extends Model
{
    public $primaryKey = 'id_contagem';

    protected $fillable = ['data_contagem','hora_contagem','qtd_contagem','turmas_id_turma','users368_id_user368'];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User368::class,'users368_id_user368');
    }

    public function turma(){
        return $this->belongsTo(Turma::class,'turmas_id_turma');
    }
}
