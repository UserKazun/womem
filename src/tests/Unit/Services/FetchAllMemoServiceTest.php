<?php

declare(strict_types=1);

namespace Tests\Unit\Services;

use App\Services\FetchAllMemoService;
use Tests\TestCase;

class FetchAllMemoServiceTest extends TestCase
{
    public function testFetchSuccessAndReturnArr()
    {
        $service = new FetchAllMemoService();
        $result = $service->execute(1);
        $this->assertIsArray($result);
    }
}
