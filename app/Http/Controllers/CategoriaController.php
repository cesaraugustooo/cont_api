<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriaResource;
use App\Services\CategoriaService;

class CategoriaController extends Controller
{
    public $service;

    public function __construct() {
        $this->service = new CategoriaService();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->service->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaRequest $request): JsonResponse
    {
        return $this->service->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria): JsonResponse
    {
        return $this->service->show($categoria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaRequest $request,Categoria $categoria): JsonResponse
    {
        return $this->service->update($request,$categoria);
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Categoria $categoria): Response
    {
        return $this->service->destroy($categoria);
    }
}
