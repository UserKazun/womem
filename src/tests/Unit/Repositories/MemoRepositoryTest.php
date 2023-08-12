<?php

declare(strict_types=1);

namespace Tests\Unit\Repositories;

use App\Models\Memo;
use App\Repositories\MemoRepository;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class MemoRepositoryTest extends TestCase
{
    public function testSuccessInsert()
    {
        DB::beginTransaction();
        $result = MemoRepository::insertMemo('test', 'This is test.');
        $this->assertInstanceOf(Memo::class, $result);

        DB::rollBack();
    }
}
