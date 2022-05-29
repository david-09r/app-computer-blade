<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\Heatsink;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HeatsinkTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_heatsink()
    {
        $this->withoutExceptionHandling();
        $htsk = Heatsink::factory()->create();
        $this->assertInstanceOf(Computer::class, $htsk->computer);
    }
}
