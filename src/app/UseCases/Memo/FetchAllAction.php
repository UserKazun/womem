<?php

namespace App\UseCases\Memo;

use App\Models\Memo;
use Illuminate\Database\Eloquent\Collection;

class FetchAllAction
{
    public function __invoke(Memo $memo, int $userId): Collection|array
    {
        return $memo->newQuery()->where('user_id', $userId)->get();
    }
}
