<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\Motherboard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MotherboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_motherboard()
    {
        $this->withoutExceptionHandling();
        $motherboard = Motherboard::factory()->create();
        $this->assertInstanceOf(Computer::class, $motherboard->computer);
    }
}
