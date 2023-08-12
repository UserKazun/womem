<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\MemoRequest;
use App\Services\MemoService;
use App\Services\FetchAllMemoService;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function register(MemoService $service, MemoRequest $request)
    {
        return $service->execute((string)$request->input('title'), (string)$request->input('description'));
    }

    public function fetchAllMemo(FetchAllMemoService $service, Request $request): array
    {
        return $service->execute((int)$request->query('user_id'));
    }
}
