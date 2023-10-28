<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Repositories\RegisterRepository;

class RegisterController extends Controller
{
    public function registerUser(RegisterRequest $request, RegisterRepository $repo): array
    {
        $name = $request->input('name');
        $password = $request->input("password");

        $hashPass = password_hash($password, PASSWORD_DEFAULT);

        $repo->registerUser($name, $hashPass);

        return [
            'message' => 'success'
        ];
    }
}
