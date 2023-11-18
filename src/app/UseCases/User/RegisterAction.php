<?php

namespace App\UseCases\User;

use App\Models\User;

class RegisterAction
{
    public function __invoke(User $user, string $name, string $password): User
    {
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $user->fill(['name' => $name, 'password' => $hashPass]);
        $user->save();

        return $user;
    }
}
