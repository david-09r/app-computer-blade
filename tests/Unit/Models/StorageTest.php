<?php

namespace Tests\Unit\Models;

use App\Models\Computer;
use App\Models\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StorageTest extends TestCase
{
    use RefreshDatabase;

    public function test_belong_to_storage()
    {
        $this->withoutExceptionHandling();
        $storage = Storage::factory()->create();
        $this->assertInstanceOf(Computer::class, $storage->computer);
    }
}
