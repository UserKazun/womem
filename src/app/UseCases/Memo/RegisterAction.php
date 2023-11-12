<?php

namespace App\UseCases\Memo;

use App\Models\Memo;

class RegisterAction
{
    public function __invoke(Memo $memo, int $userId, string $title, string $description): Memo
    {
        $memo->fill(['user_id' => $userId, 'title' => $title, 'description' => $description]);
        $memo->save();

        return $memo;
    }
}
