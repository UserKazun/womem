<?php

namespace App\Http\Resources;

use App\Http\Requests\MemoRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MemoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(MemoRequest|Request $request): array
    {
        return parent::toArray($request);
    }
}
