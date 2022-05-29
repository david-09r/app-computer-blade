<?php

namespace Tests\Unit\Models;

use App\Models\Assembler;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AssemblerTest extends TestCase
{

    use RefreshDatabase;

    public function test_has_many_computer()
    {
        $assembler = Assembler::factory()->create();
        $this->assertInstanceOf(Collection::class, $assembler->computer);
    }
}
