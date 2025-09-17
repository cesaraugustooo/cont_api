<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContagemRequest;
use App\Models\Contagens;
use App\Services\ContagenService;
use Illuminate\Http\Request;

class ContagensController extends Controller
{
    public $service;

    public function __construct() {
        $this->service= new ContagenService();
    }
    
    public function index()
    {
        $contagens = $this->service->getAll();

        return response()->json([$contagens]);
    }
 
    public function store(ContagemRequest $request)
    {
        $contagem = $this->service->postContagem($request);

        return response()->json([$contagem]);
    }

    public function show(Contagens $contagens)
    {
        //
    }


    public function update(Request $request, Contagens $contagens)
    {
        //
    }

     function destroy(Contagens $contagens)
    {
        //
    }
}
