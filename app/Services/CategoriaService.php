<?php

namespace App\Services;

use App\Http\Requests\CategoriaRequest;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaService
{
     /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $categorias = Categoria::paginate();

        return CategoriaResource::collection($categorias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {
        $categoria = Categoria::create($request->validated());

        return response()->json(new CategoriaResource($categoria));
    }

    /**
     * Display the specified resource.
     */
    public function show($categoria)
    {
        return response()->json(new CategoriaResource($categoria));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request,$categoria)
    {
        $categoria->update($request->validated());

        return response()->json(new CategoriaResource($categoria));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy($categoria)
    {
        $categoria->delete();

        return response()->noContent();
    }
}