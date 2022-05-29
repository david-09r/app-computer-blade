<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\PowerSupply;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PowerSupplyTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_powersupply()
    {
        $this->withoutExceptionHandling();
        $pws = PowerSupply::factory()->create();
        $this->assertInstanceOf(Computer::class, $pws->computer);
    }
}
