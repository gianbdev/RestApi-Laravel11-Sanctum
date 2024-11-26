<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Maneja la autenticación de un usuario.
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        // Validación ya está hecha en LoginRequest

        // Obtener las credenciales del usuario
        $credentials = $request->only('email', 'password');

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
        }

        // Si la autenticación falla
        throw ValidationException::withMessages([
            'email' => ['Las credenciales proporcionadas no son válidas.'],
        ]);
    }

    public function logout(LoginRequest $request)
    {
        // Revoca el token actual del usuario
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Sesión cerrada correctamente.']);
    }

}
