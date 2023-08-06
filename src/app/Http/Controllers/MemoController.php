<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\MemoRequest;
use App\Services\MemoService;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function register(MemoService $service, MemoRequest $request): array
    {
        return $service->execute((string)$request->input('title'), (string)$request->input('description'));
    }
}
