<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Memo;
use Illuminate\Database\Eloquent\Collection;

class MemoRepository
{
    /**
     * @param string $title
     * @param string $description
     * 
     * @return Memo
     */
    public static function insertMemo(string $title, string $description): Memo
    {
        return Memo::create([
            'user_id' => 1,
            'title' => $title,
            'description' => $description,
        ]);
    }

    public static function fetchAllMemo(int $userId): Collection
    {
        return Memo::where('user_id', $userId)->get();
    }
}
