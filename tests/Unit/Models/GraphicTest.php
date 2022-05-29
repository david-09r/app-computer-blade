<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\Graphic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GraphicTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_graphic()
    {
        $this->withoutExceptionHandling();
        $gpu = Graphic::factory()->create();
        $this->assertInstanceOf(Computer::class, $gpu->computer);
    }
}
