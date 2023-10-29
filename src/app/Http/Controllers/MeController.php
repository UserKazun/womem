<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
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
}
