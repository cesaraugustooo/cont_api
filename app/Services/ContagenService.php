<?php

namespace App\Services;

use App\Http\Requests\ContagemRequest;
use App\Models\Contagens;

class ContagenService
{
    public $data_contagem;
    
    public $hora_contagem;

    public $qtd_contagem;

    public $turmas_id_turma;

    public $users368_id_user368;

    public function getAll(){
        return Contagens::with(['turma'])->paginate(20);
    }

    public function postContagem($request){
        $validate = array_merge($request->validated(),['data_contagem'=>date('Y-m-d'),'hora_contagem' => date('H:i:s'),'users368_id_user368'=>auth()->user()->id_user368]);

        $contagem = Contagens::create($validate);

        return $contagem; 
    }

    public function updateContagem($request){
        $request->validate([
            'qtd_contagem'=> 'sometimes|int|min:0',
            'turmas_id_turma'=>'sometimes|int',
        ]);

        $validate = array_merge($request->validated(),['data_contagem'=>date('Y-m-d'),'hora_contagem' => date('H:i:s'),'users368_id_user368'=>auth()->user()->id_user368]);

    }
}

