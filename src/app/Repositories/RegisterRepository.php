<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

class RegisterRepository
{
    public function __construct(private readonly User $user)
    {
    }

    public function registerUser(string $name, string $password): User
    {
        $this->user->fill(['name' => $name, 'password' => $password]);
        $this->user->save();

        return $this->user;
    }
}
