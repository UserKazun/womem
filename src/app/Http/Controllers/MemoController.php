<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\MemoRequest;
use App\Http\Resources\MemoResource;
use App\Models\Memo;
use App\Services\FetchAllMemoService;
use App\UseCases\Memo\RegisterAction;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function register(RegisterAction $action, MemoRequest $request): MemoResource
    {
        return new MemoResource(
            $action(
                new Memo(),
                1,
                (string)$request->input('title'),
                (string)$request->input('description')
            )
        );
    }

    public function fetchAllMemo(FetchAllMemoService $service, Request $request): array
    {
        return $service->execute((int)$request->query('user_id'));
    }
}
