<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @throws AuthenticationException
     */
    public function login(LoginRequest $request): array
    {
        $credentials = $request->only(['name', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return [
                'message' => 'Authenticated.'
            ];
        }

        throw new AuthenticationException();
    }
}
