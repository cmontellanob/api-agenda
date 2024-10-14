<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $usuario = User::where('email', $request->email)->first();
       
        if ($usuario == null) {
            return response()->json([
                'mensaje' => 'usuario invalido',
            ], 400);
        }
        if (Hash::check($request->password, $usuario->password)) {
            $key=env('JWT_SECRET');
            $algoritmo=env('JWT_ALGORITHM');
            
            $time = time();
            $token = array(
                'iat' => $time, // Tiempo que inició el token
                'exp' => $time + (1200 * 60), // Tiempo que expirará el token (+1 hora)
                'data' => [ // información del usuario
                    'user_id' => $usuario->id,
                ],
            );
            $jwt = JWT::encode($token, $key, $algoritmo);
            return response()->json([
                'mensaje' => 'Se logró autenticar al usuario',
                        'token' => $jwt,
                        'type' => 'bearer',
                        'expires' => $time + (1200 * 60),
                        'usuario' => $usuario
            ], 200);
        } else {
            return response()->json([
                'mensaje' => 'Contraseña invalida',
                'status' => 400
            ], 400);
        }
    }
}
