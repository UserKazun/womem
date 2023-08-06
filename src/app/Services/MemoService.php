<?php

declare(strict_types=1);

namespace App\Services;

class MemoService
{
    public function execute(string $title, string $description): array
    {
        return [
            'data' => [
                'title' => $title,
                'description' => $description
            ]
        ];
    }
}
