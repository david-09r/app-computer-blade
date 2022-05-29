<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\Fan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FanTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_fan()
    {
        $this->withoutExceptionHandling();
        $fan = Fan::factory()->create();
        $this->assertInstanceOf(Computer::class, $fan->computer);
    }
}
