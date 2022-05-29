<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Assembler;
use App\Models\Computer;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComputerControllerTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    public function test_computer_index()
    {
        $this->withoutExceptionHandling();
        $computer = Computer::factory()->create();

        $this->get('computers')
            ->assertStatus(200)
            ->assertSee($computer->id)
            ->assertDontSee('No hay computadores registrados');
    }

    public function test_computer_create()
    {
        $this->get('computers/create')
            ->assertStatus(200);
    }

    public function test_computer_store()
    {
        $this->withoutExceptionHandling();

        $assembler = Assembler::factory()->create();
        $seller = Seller::factory()->create();
        $user = User::factory()->create();

        $data = [
            'date_purchase' => $this->faker->dateTime,
            'date_delivery' => $this->faker->dateTime,
            'date_assembly' => $this->faker->dateTime,

            'assembler_id' => $assembler->id,
            'seller_id' => $seller->id,
            'user_id' => $user->id
        ];

        $this->post('computers', $data)
            ->assertRedirect('computers');
    }

    public function test_computer_show()
    {
        $this->withoutExceptionHandling();

        $computer = Computer::factory()->create();

        $this->get("computers/$computer->id")
            ->assertStatus(200);
    }

    public function test_computer_edit()
    {
        $computer = Computer::factory()->create();
        $this->get("computers/$computer->id/edit")
            ->assertStatus(200)
            ->assertSee($computer->id);
    }

    public function test_computer_update()
    {
        $computer = Computer::factory()->create();
        $data = [
            'date_purchase' => $this->faker->dateTime,
            'date_delivery' => $this->faker->dateTime,
            'date_assembly' => $this->faker->dateTime,
        ];

        $this->put("computers/$computer->id", $data)
            ->assertRedirect('computers');

        $this->assertDatabaseHas('computers', $data);
    }

    public function test_computer_destroy()
    {
        $computer = Computer::factory()->create();

        $this->delete("computers/$computer->id")
            ->assertRedirect('computers');

        $this->assertDatabaseMissing('computers', [
           'id' => $computer->id,
        ]);
    }
}
