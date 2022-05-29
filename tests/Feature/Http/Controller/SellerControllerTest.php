<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Seller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SellerControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_seller_index()
    {
        $this->withoutExceptionHandling();
        $seller = Seller::factory()->create();

        $this->get('sellers')
            ->assertStatus(200)
            ->assertSee($seller->id)
            ->assertDontSee('No hay vendedores registrados');
    }

    public function test_seller_show()
    {
        $seller = Seller::factory()->create();

        $this->get("sellers/$seller->id")
            ->assertStatus(200);
    }

    public function test_seller_create()
    {
        $this->get('sellers/create')
            ->assertStatus(200);
    }
}
