<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\MemoRepository;

class MemoService
{
    public function execute(string $title, string $description): void
    {
        MemoRepository::insertMemo($title, $description);
    }
}
