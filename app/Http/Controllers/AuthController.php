<?php

namespace App\Http\Controllers;

use App\Http\Requests\User368Request;
use App\Models\User368;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(User368Request $request){
        
        $creds = [
            'nome_user368'=>$request->nome_user368,
            'password'=>$request->senha_user368
        ];

        if(Auth::attempt($creds)){
            $user = User368::where('nome_user368',$creds['nome_user368'])->first();
            $token = $user->createToken('api')->plainTextToken;

            return response()->json(['token'=>$token]);
        }

        return response()->json(['message'=>'Credenciais Invalidas'],401);
    }
}
