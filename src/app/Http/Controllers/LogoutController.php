<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
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
