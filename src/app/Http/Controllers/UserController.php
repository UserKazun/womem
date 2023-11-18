<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\UseCases\User\RegisterAction;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(RegisterAction $action, RegisterRequest $request): UserResource
    {
        return new UserResource($action(
            new User(),
            (string)$request->input('name'),
            (string)$request->input('password'),
        ));
    }

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

    public function getMe(Request $request): array
    {
        $user = $request->user();

        return [
            'message' => 'Success get user',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'password' => $user->password
            ],
        ];
    }

    public function logout(Request $request): array
    {
        if (Auth::guard()->guest()) {
            return [
                'message' => 'Already Unauthenticated.',
            ];
        }

        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return [
            'message' => 'Unauthenticated.',
        ];
    }
}
