<?php

namespace Tests\Unit\Models;

use App\Models\Cabinet;
use App\Models\Computer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CabinetTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_cabinet()
    {
        $this->withoutExceptionHandling();
        $cabinet = Cabinet::factory()->create();
        $this->assertInstanceOf(Computer::class, $cabinet->computer);
    }
}
