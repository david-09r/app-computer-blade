<?php

namespace Tests\Unit\Models;


use App\Models\Seller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SellerTest extends TestCase
{
    use RefreshDatabase;

    public function test_seller_database()
    {
        $seller = Seller::factory()->create();

        $this->assertInstanceOf(Collection::class, $seller->computer);
    }
}
