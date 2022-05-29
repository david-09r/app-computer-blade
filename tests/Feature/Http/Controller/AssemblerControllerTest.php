<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Assembler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AssemblerControllerTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    public function test_assembler_index()
    {
        $this->withoutExceptionHandling();
        $assembler = Assembler::factory()->create();

        $this->get('assemblers')
            ->assertStatus(200)
            ->assertSee($assembler->id)
            ->assertDontSee('No existe ningun ensamblador');
    }

    public function test_assembler_create()
    {
        $this->withoutExceptionHandling();

        $this->get('assemblers/create')
            ->assertStatus(200);
    }

    public function test_assembler_store()
    {
        $this->withoutExceptionHandling();
        $data = [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->numberBetween(500000, 5000000),
            'payment_method' => $this->faker->creditCardType,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'position' => $this->faker->word
        ];

        $this->post('assemblers', $data)
            ->assertRedirect('assemblers');
    }

    public function test_assembler_edit()
    {
        $this->withoutExceptionHandling();
        $assembler = Assembler::factory()->create();

        $this->get("assemblers/$assembler->id/edit")
            ->assertStatus(200)
            ->assertSee($assembler->id);
    }

    public function test_assembler_update()
    {
        $this->withoutExceptionHandling();
        $assembler = Assembler::factory()->create();
        $data = [
            'first_name' => 'Carlos',
            'last_name' => 'Robert'
        ];

        $this->put("assemblers/$assembler->id", $data)
            ->assertRedirect("assemblers");

        $this->assertDatabaseHas('assemblers', $data);
    }

    public function test_assembler_destroy()
    {
        $this->withoutExceptionHandling();
        $assembler = Assembler::factory()->create();

        $this->delete("assemblers/$assembler->id")
            ->assertRedirect("assemblers");

        $this->assertDatabaseMissing('assemblers',  [
            'id' => $assembler->id,
        ]);
    }
}
