<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\Memory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MemoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_memory()
    {
        $this->withoutExceptionHandling();
        $memory = Memory::factory()->create();
        $this->assertInstanceOf(Computer::class, $memory->computer);
    }
}
