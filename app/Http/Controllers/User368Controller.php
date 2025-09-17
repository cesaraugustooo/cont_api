<?php

namespace App\Http\Controllers;

use App\Http\Requests\User368Request;
use App\Models\User368;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User368Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([User368::all()],200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(User368Request $request)
    {
        $validate = array_merge($request->validated(),['nivel_user368'=>'0']);
        $validate['senha_user368'] = Hash::make($validate['senha_user368']);
        
        $user = User368::create($validate);

        return response()->json([$user]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User368 $user)
    {
        return response()->json([$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User368 $user)
    {
        try{
            $validate = $request->validate([
                'nome_user368' => 'sometimes|string',
                'senha_user368' => 'sometimes|string|max:8',
            ]);
            
            $user->update($validate);

            return response()->json($user);
        }catch(QueryException $e){
            return response()->json(['message'=>'Erro ao atualizar usuario'],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User368 $user368)
    {
        //
    }
}
