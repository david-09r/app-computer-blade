<?php

namespace Tests\Unit\Models;

use App\Models\Assembler;
use App\Models\Computer;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ComputerTest extends TestCase
{

    use RefreshDatabase;

    public function test_belong_to_assembler()
    {
        $this->withoutExceptionHandling();
        $computer = Computer::factory()->create();

        $this->assertInstanceOf(Assembler::class, $computer->assembler);
    }

    public function test_belong_to_seller()
    {
        $this->withoutExceptionHandling();
        $computer = Computer::factory()->create();

        $this->assertInstanceOf(Seller::class, $computer->seller);
    }

    public function test_belong_to_user()
    {
        $this->withoutExceptionHandling();
        $computer = Computer::factory()->create();

        $this->assertInstanceOf(User::class, $computer->user);
    }
}
