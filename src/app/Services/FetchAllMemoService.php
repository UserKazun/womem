<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\MemoRepository;

class FetchAllMemoService
{
    public function execute(int $userId): array
    {
        $memos = MemoRepository::fetchAllMemo($userId);

        $memoArr = [];
        foreach ($memos as $memo) {
            $memoArr[] = $memo;
        }

        return $memoArr;
    }
}
