<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\Cpu;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CpuTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_cpu()
    {
        $this->withoutExceptionHandling();
        $cpu = Cpu::factory()->create();
        $this->assertInstanceOf(Computer::class, $cpu->computer);
    }
}
