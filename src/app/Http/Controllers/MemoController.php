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
        $result = $service->execute((string)$request->input('title'), (string)$request->input('description'));
        if ($result) {
            return response(['message' => 'success'], 200)->header('Content-Type', 'application/json');
        }
    }

    public function fetchAllMemo(FetchAllMemoService $service, Request $request): array
    {
        return $service->execute((int)$request->query('user_id'));
    }
}
