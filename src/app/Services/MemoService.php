<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Memo;
use App\Repositories\MemoRepository;

class MemoService
{
    public function execute(string $title, string $description): bool
    {
        $result = MemoRepository::insertMemo($title, $description);
        if (!($result instanceof Memo)) {
            return false;
        }

        return true;
    }
}
