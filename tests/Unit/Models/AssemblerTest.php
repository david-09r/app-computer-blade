<?php

namespace Tests\Unit\Models;

use App\Models\Assembler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AssemblerTest extends TestCase
{

    use RefreshDatabase;

    public function test_assembler_database()
    {
        $assembler = Assembler::factory()->create();

        $this->assertInstanceOf(Assembler::class, $assembler);
    }
}
